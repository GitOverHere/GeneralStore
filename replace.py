import pandas as pd
df = pd.read_csv('products.csv')
df.to_csv('output.csv', index=False)