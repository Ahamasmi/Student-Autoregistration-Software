from excel import *
from openpyxl import *
from tkinter import *
import time
def printf():
    status_field.delete(0,END)
    rno=name_field.get()
    status=ip(rno)
    #print(status)
    status_field.insert(0,status)

root = Tk()
root.configure(background='beige') 
root.title("registration form") 
root.geometry("400x200") 
heading = Label(root, text="Welcome to IIIT autoregistration software")
name = Label(root, text="JEE Rno")
heading.grid(row=0, column=1) 

name.grid(row=1, column=0) 
name_field = Entry(root) 
name_field.grid(row=1, column=1, ipadx="100") 
status_field = Entry(root)
status_field.grid(row=2, column=1,ipadx="100")

# create a Submit Button and place into the root window 
submit = Button(root, text="Submit", bg="dark grey",command=printf )
submit.grid(row=8, column=1) 
#clear = Button(root, text="Clear", bg="dark grey",command=clear )
#clear.grid(row=9, column=1)
# start the GUI 
root.mainloop() 
