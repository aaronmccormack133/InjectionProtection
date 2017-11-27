from selenium import webdriver
from selenium.webdriver.common.keys import Keys
import time
import pickle
import csv
from selenium.webdriver import ActionChains
user = []
pw = []

import csv
with open('Logins.csv') as f:
    reader = csv.reader(f)
    next(f);
    for row in reader:
        user = (row[0])
        pw = (row[1])
print(pw)


browser = webdriver.Chrome()
browser.get("https://codeanywhere.com/login") 
time.sleep(2)


username = browser.find_element_by_id("login-email")
password = browser.find_element_by_id("login-password")
username.send_keys("blank") #need to pass user here but not sure how to go about since item is stored in a list 
password.send_keys("blank")#same with password
login_attempt = browser.find_element_by_xpath("//*[@type='submit']")
login_attempt.submit()
time.sleep(5)
run = browser.find_element_by_xpath('//*[@id="3c8119e86747343eff4f94e9097657d5"]').click()



