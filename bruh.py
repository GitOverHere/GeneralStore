import csv
f = open('products.csv','w')
spamwriter = csv.writer(f,delimiter=',',quotechar='|')
spamwriter.writerow(['Spam',"bruh","bruh"])