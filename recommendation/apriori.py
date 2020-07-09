# Apriori Algorithm

# Importing the libraries
import numpy as np
import pandas as pd
import json

# Data Preprocessing
dataset = pd.read_csv('book1.csv', header = None)

transactions = []
for i in range(1, 200):
    transactions.append([str(dataset.values[i,j]) for j in range(0, 20)])

# Training the Apriori model on the dataset
from apyori import apriori
rules = apriori(transactions, min_support = 0.01, min_confidence = 0.01, min_lift = 2, min_length = 1)

# Visualising the results
results = list(rules)
#print(results[0])

dictionary={
            "name":"association"
}
#paired items
for items in results:
    pair=items[0]
    items=[x for x in pair]
    #print("Rule:"+items[0]+"-->"+items[1])
    if(items[0]!="nan" and items[1]!="nan"):
        dictionary[items[0]]=items[1]
        json_object=json.dumps(dictionary,indent=4)

    with open("output.json","w") as outfile:
        outfile.write(json_object)

        


    
