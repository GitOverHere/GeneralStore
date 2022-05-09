from selenium import webdriver
import os
import sys
from selenium.common.exceptions import NoSuchElementException
import csv

location = "C:\Program Files\BraveSoftware\Brave-Browser\Application\chromedriver.exe"
dir="products/"
template = "template/"
csvfile = open("products.csv","w")
csvwriter = csv.writer(csvfile,delimiter=',')
id = 1


options = webdriver.FirefoxOptions()
options.headless = True

driver = webdriver.Firefox(options=options)
instant_answer =""
instant_answera =""
driver.get("https://duckduckgo.com/?q=aaa")
for name in os.listdir("products"):
  print("Navigate to: "+"https://duckduckgo.com/?q="+name)
  driver.get("https://duckduckgo.com/?q="+name)
  f = open(dir+name+"/description","wb")
  print("Copying "+template+"to:"+dir+name)
  os.system("xcopy template "+'"'+dir+name+'"'+" /Y /S")
  with open(dir+name) as file:
   newfile = file.replace("Information about the product goes here.","")
   newfile = file.replace("Information about the product goes here.","")
  
  
  try:
   instant_answer = driver.find_element_by_class_name("js-about-item-abstr").text.encode("utf8")
   instant_answera = driver.find_element_by_class_name("js-about-item-abstr").text
   f.write(instant_answer)
  except NoSuchElementException:
   sorry = "This item has no description. Check back later."
   instant_answer = sorry.encode("utf8")
   f.write(sorry.encode("utf8"))
  csvwriter.writerow([str(name).encode("utf8"),instant_answer])
  id += 1
  f.close()
csvfile.close()
webdriver.quit()

#Script Last run on Feburary 16, 2022