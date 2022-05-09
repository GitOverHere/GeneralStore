from selenium import webdriver
import os
import sys
from selenium.common.exceptions import NoSuchElementException
from getpass import getpass
import mysql.connector
import time
import urllib.request
import mysql



location = "C:\Program Files\BraveSoftware\Brave-Browser\Application\chromedriver.exe"
dir="products/"
base_url = "https://duckduckgo.com/?ia=images&iax=images&q="
image_url = ""
id = 1




print("===Login===");
print("Username:")
username = input()
password = getpass()
cnx = mysql.connector.connect(user=username, password=password, host="127.0.0.1", database='generalstore')



options = webdriver.FirefoxOptions()
options.headless = False

driver = webdriver.Firefox(options=options)
id=1
for name in os.listdir("products"):
  print("Navigate to: "+base_url+name)
  driver.get(base_url+name)
  time.sleep(1.5)
  try:
   image_url = driver.find_element_by_class_name("tile--img__img").get_attribute("src")
   urllib.request.urlretrieve(image_url,"img/"+name+".png")
   cursor = cnx.cursor()
   add_image_url = """UPDATE products SET `image_url` = %s WHERE `id` = %s"""
   info = (image_url,str(id))
   cursor.execute(add_image_url, info)
   cnx.commit() 
   id+= 1  
   
  except NoSuchElementException:
   print("An image could not be found lol.")
   print(NoSuchElementException)
cursor.close()
cnx.close()
driver.quit()

