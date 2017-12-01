from selenium import webdriver
from selenium.webdriver.common.keys import Keys
import time
import pickle
import csv
from selenium.webdriver import ActionChains
user = []
pw = []
xpath = []
import csv
test = True 
while(test == True) :
    time.sleep(60)
    with open('Logins.csv') as f:
        reader = csv.reader(f)
        next(f);
        for row in reader:
            user = (row[0])
            pw = (row[1])
            xpath = (row[2])
            browser = webdriver.Chrome()
            browser.get("https://codeanywhere.com/login") 
            time.sleep(2)


            username = browser.find_element_by_id("login-email")
            password = browser.find_element_by_id("login-password")
            username.send_keys(user) #need to pass user here but not sure how to go about since item is stored in a list 
            password.send_keys(pw)#same with password
            login_attempt = browser.find_element_by_xpath("//*[@type='submit']")
            login_attempt.submit()
            time.sleep(5)
            run = browser.find_element_by_xpath(xpath).click()
            time.sleep(2)
            browser.quit()
    time.sleep(3)
    print("1 complete\n")









