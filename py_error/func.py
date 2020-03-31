#!/usr/bin/env python3

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