import webbrowser
import pyautogui as gui
import time

def combineKey(a,b):
    gui.keyDown(a)
    gui.press(b)
    gui.keyUp(a)

combineKey('alt','tab')
combineKey('ctrl','w')

url = "https://web.whatsapp.com/send?phone=+6283861513567&text=pesan%201"
webbrowser.open(url,new=0,autoraise=True)
time.sleep(30)
gui.press('Enter')

time.sleep(30)
combineKey('ctrl','w')
gui.press('Enter')

url = "https://web.whatsapp.com/send?phone=+6283861513567&text=pesan%202"
webbrowser.open(url,new=0,autoraise=True)
time.sleep(30)
gui.press('Enter')
