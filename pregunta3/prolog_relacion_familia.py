#!/usr/bin/env python
# coding: utf-8

# In[1]:


from pyswip import Prolog
prolog=Prolog()

prolog.assertz("hijode(mayta,diego)")
prolog.assertz("hijode(diego,jose)")
prolog.assertz("hijode(marcela,jose)")
prolog.assertz("hijode(julia,alejandro)")

prolog.assertz("padrede(diego,mayta)")
prolog.assertz("padrede(jose,diego)")
prolog.assertz("padrede(jose,marcela)")
prolog.assertz("padrede(alejandro,julia)")

prolog.assertz("hermanode(diego,marcela)")
prolog.assertz("hermanode(marcela,diego)")

prolog.assertz("abuelode(jose,mayta)")

for elemento in prolog.query("hijode(X,Y)"):
    print(elemento["X"],"es hijo de",elemento["Y"])
for elemento in prolog.query("padrede(X,Y)"):
    print(elemento["X"],"es el padre de",elemento["Y"])
for elemento in prolog.query("hermanode(X,Y)"):
    print(elemento["X"],"es el hermano de",elemento["Y"])
for elemento in prolog.query("abuelode(X,Y)"):
    print(elemento["X"],"es el abuelo de",elemento["Y"])


# In[ ]:




