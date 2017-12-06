from requests import session

payload = {
    'action': 'login',
    'username': 'jackbourkemckenna@gmail.com',
    'password': 'thebestpassword'
}

with session() as c:
    c.post('https://codeanywhere.com/login', data=payload)
    response = c.get('https://codeanywhere.com/editor/')
    print(response.headers)
    print(response.session())
    


  # -jackbourkemckenna@gmail.com https://codeanywhere.com/api/ca6/devbox/start?id=1390812&token=90d21d401a47d27dcd205fc600fa02ddd87ab4b2b76feb0f&rand=0.9888172966060378
  # -jackbourkemckenna+2@gmail.com https://codeanywhere.com/api/ca6/devbox/start?id=1397652&token=a2c2453cf2330d092a6c99f57464c5455bfb772806c1a100&rand=0.4379578512796507



  #Bestpassword1