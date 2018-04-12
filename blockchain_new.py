from flask import Flask
from flask import request
from flask import current_app
import json
import string
import random
import requests
import hashlib as hasher
import datetime as date


node = Flask(__name__)

# Definition of a block present in the blockchain
class Block:
  def __init__(self, index, transactionId, timestamp, proof_of_work, encryptActCode, previous_hash):
    self.index = index
    self.transactionId = transactionId
    self.timestamp = timestamp
    self.proof_of_work = proof_of_work
    self.encryptActCode = encryptActCode
    self.previous_hash = previous_hash
    self.hash = self.hash_block()
  
#calculating the hash from previous hash 
  def hash_block(self):
    sha = hasher.sha256()
    sha.update((str(self.index) + str(self.timestamp) + str(self.previous_hash)).encode('utf-8'))
    return sha.hexdigest()
  
# Generate genesis block
def create_genesis_block():
  # Manually construct a block with index zero and 0 previous hash
  return Block(0, -1, date.datetime.now(), 9, "init", "0") # TransactioId for block 1 is -1, activation code is init


# This node's blockchain copy
blockchain = []
# peer_nodes = ['192.168.43.67', '192.168.43.102']

blockchain.append(create_genesis_block())

@node.route('/txion', methods=['POST'])                     #????????????
def transaction():
    
  prodID = request.form['prodID'] # FIGURE OUT HOW DATA IS COMING

  # actCode = "".join(sha.hexdigest()[::4])  # divide 256 by 4 to give a 64 bit key
  actCode = prodID
  
  key = generateKey() #generate random 64 bit key 
  encryptActCode = encrypt(actCode, key) #encrypts the activation code with key

  #print(encryptActCode) ############working
    
  mine(encryptActCode) #adds block to blockchain

  return "Transaction added on blockchain successfully\n" +  "Transaction ID = " + blockchain[len(blockchain) - 1].transactionId +  "  \nProduct Code = " + actCode + "  \nkey = " + key + "  \nEncrypted Product ID= " +encryptActCode    #(NEEDS TO BE DISPLAYED ON WEBSITE OR EMAILED)
  # return redirect('~/Documents/test.html')



def generateKey():  
  
  generated = ''.join(random.choice('abcdef0123456789') for _ in range(16))
  return generated



def encrypt(plain_text, key): # assuming key and plain_text are equal in length
  encrypted = hex(int(plain_text, 16) ^ int(key, 16))[2:]
  return encrypted

@node.route('/blocks', methods=['GET', 'POST'])

def search_blockchain():

  transactionId = request.form['transactionId'] 
  key_new = request.form['key']
  QRcode_ProductID = request.form['QRcode_ProductID']


  existInChain = False
  for block in blockchain:
    if transactionId == block.transactionId:
        existInChain = True   #if block with the requested transaction ID is present in the blockchain then...

        decryptActCode = decrypt(block.encryptActCode, key_new) #decrypt the cipher present in t he blockchain

        if decryptActCode == QRcode_ProductID:  #if both match, authenticate purchase
          return "Your Purchase has been Authenticated"
        else:
          return "Your Purchase has been Denied. Please Contact the Retailer" 
        

  if existInChain == False: #if block with the required transaction Id is not present in the blockchain
    return "Transaction doesn't exist in the blockchain\n"


def decrypt(encrypted_text, key): # assuming key and plain_text are equal in length
  decrypted = hex(int(encrypted_text, 16) ^ int(key, 16))[2:]
  return decrypted



# # Update the current blockchain to the longest blockchain across all other
# # peer nodes.
# def consensus():
#     global blockchain
#     longest_chain = blockchain
#     for chain in find_other_chains():
#         if len(longest_chain) < len(chain):
#             longest_chain = chain
#     return update_blockchain(longest_chain)

# # Updates current blockchain. If updated is needed, converts JSON blockchain to
# # list of blocks.
# def update_blockchain(src):
#     if len(src) <= len(blockchain):
#         return blockchain
#     ret = []
#     for b in src:
#         ret.append(Block(b['index'], b['transactionId'], b['timestamp'], b['proof_of_work'], b['encryptActCode'], b['previous_hash'], b['hash']))
#     return ret

# def find_other_chains():
#     ret = []
#     for peer in peer_nodes:
#         response = requests.get('http://%s/blocks' % peer)
#         if response.status_code == 200:
#             print("blocks from peer: " + response.content)
#             ret.append(json.loads(response.content))
#     return ret



@node.route('/view', methods=['POST'])

def view_blockchain():  #print all the blocks and their data
  for block in blockchain:
    print("                                           ")
    print
    print("*******" + str(block.index) + "*******")
    print
    print("Transaction ID: " + str(block.transactionId))
    print
    print("Block timestamp: " + str(block.timestamp))
    print
    print("Block proof of work: " + str(block.proof_of_work))
    print 
    print("Encrypted Activation Code: " + str(block.encryptActCode))
    print
    print("Previous Hash: " + str(block.previous_hash))
    print
    print("Hash of block: " + str(block.hash))
    print
    print
    print("                                          ")


def get_proof_of_work(last_proof):
  # Create a variable that we will use to find our next POW
  incrementor = last_proof + 1
  #keep increasing incrementor till div by 9 and prev POW
  while not (incrementor % 9 == 0 and incrementor % last_proof == 0) :
    incrementor += 1
  #return that as the POW
  return incrementor

@node.route('/mine', methods = ['GET'])

def mine(encryptActCode):
  #print(encryptActCode)

  last_block = blockchain[len(blockchain) - 1]
  last_proof = last_block.proof_of_work

  # Find the POW for the current block being mined
  proof = get_proof_of_work(last_proof)

  new_block_index = last_block.index + 1
  new_block_transactionId = "Txn" + str(new_block_index)  #Transaction ID is just txn+index of block
  new_block_timestamp = this_timestamp = date.datetime.now()
  last_block_hash = last_block.hash
  
  mined_block = Block(
    new_block_index,
    new_block_transactionId,
    new_block_timestamp,
    proof,
    encryptActCode,
    last_block_hash
  )

  blockchain.append(mined_block) # adding the created block to the blockchain
  

  view_blockchain()  #display the blockchain


# node.run(host = '192.168.137.229')
node.run()
