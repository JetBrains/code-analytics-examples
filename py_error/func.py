#!/usr/bin/env python3
import sys 
import requests
import psycopg2

requests.post('https://httpbin.org/post', allow_redirects='fail')

try:
  pass
except psycopg2.OperationalError as e:
  print('ok')
  
class smallcase:
    def CapsMethod(self, n, d=2):
          if n % d == 0:
              print(f'NO = {d}')
              return
          if d > n/2:
              print(f'YES = {d}')
              return
          self.CapsMethod(n, d+1)

smallcase().CapsMethod(10)
