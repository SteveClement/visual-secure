#!/usr/bin/env python

import facebook

user = 1474584210

fb = facebook.Facebook('321b8c0096dbe3545fe4fc0641acbeed','1303b424fe0ef2a24343caac19b31f61')
fb.auth.createToken()
fb.login()
fb.auth.getSession()
fb.users.getInfo([user], ['name', 'birthday'])