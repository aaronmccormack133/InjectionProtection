from selenium import webdriver
from selenium.webdriver.common.keys import Keys
import time
import pickle
from selenium.webdriver import ActionChains

browser = webdriver.Chrome()
browser.get("https://codeanywhere.com/login") 
time.sleep(1)
username = browser.find_element_by_id("login-email")
password = browser.find_element_by_id("login-password")
username.send_keys("blank")
password.send_keys("blank")
login_attempt = browser.find_element_by_xpath("//*[@type='submit']")
login_attempt.submit()
time.sleep(5)
run = browser.find_element_by_xpath('//*[@id="3c8119e86747343eff4f94e9097657d5"]').click()



