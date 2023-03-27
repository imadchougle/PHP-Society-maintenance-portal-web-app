import time
import tkinter as tk
from tkinter import *
import mysql.connector

mydb = mysql.connector.connect(
  host="localhost",
  port="3306",
  user="root",
  password="",
  database="maintenance"
)

window = tk.Tk()
window.title("Secretary")
window.geometry("1500x500")
window.configure(bg="grey")



label=tk.Label(window,text="SOCIETY SECRETARY PORTAL",bg="orange",borderwidth=20 , font=('Helvatical bold',15))
label.grid(row=1,column=25)


message1 = Label(window,text="update status",font=('Helvatical bold',15),bg="grey")
message1.place(x=900,y=100)

message = Label(window,text="check status",font=('Helvatical bold',15),bg="grey")
message.grid(row=4,column=2)

id_label = tk.Label(window, text="R_ID/Room Number",fg="blue",font=('Helvatical bold',13))
id_label.place(x=800,y=140)

id_entry = tk.Entry(window,font=13)
id_entry.place(x=960,y=139)


age_label = tk.Label(window, text="Update",fg="blue",font=('Helvatical bold',13))
age_label.place(x=880,y=180)

age_entry = tk.Entry(window,font=13)
age_entry.place(x=960,y=180)

roomNo_label = tk.Label(window, text="Enter Room Number",font=('Helvatical bold',13),fg="blue")
roomNo_label.grid(row=7, column=1)

roomNo_ent = tk.Entry(window)
roomNo_ent.grid(row=7, column=2)

id_ent = tk.Entry(window,width=25,font=12)
id_ent.grid(row=7, column=2)

textbox = tk.Text(window, width=35, height=8,font=10)
textbox.grid(row=12,column=2)
def update():

  id = id_entry.get()
  age = age_entry.get()

  cursor = mydb.cursor()
  sql = "UPDATE maintenance_tb1 SET roomNo = %s WHERE R_ID = %s"
  val = (age, id)
  cursor.execute(sql, val)
  mydb.commit()

  id_entry.delete(0, tk.END)
  age_entry.delete(0, tk.END)

  success_label.config(text="Record updated successfully!")
  success_label.place(x=960,y=220)


def retrieve_data():

  id_num = id_ent.get()
  cursor = mydb.cursor()
  cursor.execute("SELECT roomNo FROM maintenance_tb1 WHERE R_ID=%s", (id_num,))
  data = cursor.fetchone()

  if data == (1,):
    textbox.insert(tk.END,"Room 001 paid\n","paid_green")
    textbox.tag_configure("paid_green", foreground="green")

  elif data == (2,):
    textbox.insert(tk.END,"Room 002 paid\n","paid_green")
    textbox.tag_configure("paid_green", foreground="green")

  elif data == (101,):
    textbox.insert(tk.END,"Room 101 paid\n","paid_green")
    textbox.tag_configure("paid_green", foreground="green")

  elif data == (102,):
    textbox.insert(tk.END,"Room 102 paid\n","paid_green")
    textbox.tag_configure("paid_green", foreground="green")

  elif data == (103,):
    textbox.insert(tk.END,"Room 103 paid\n","paid_green")
    textbox.tag_configure("paid_green", foreground="green")

  elif data == (201,):
    textbox.insert(tk.END,"Room 201 paid\n","paid_green")
    textbox.tag_configure("paid_green", foreground="green")
  else:
    textbox.insert(tk.END,f'Room { id_num } unpaid\n',"unpaid_red")
    textbox.tag_configure("unpaid_red", foreground="red")


  id_ent.delete(0, tk.END)
  success_label1.config(text="Data Fetched")

clear_button = tk.Button(window, text="Clear",bg="red", font=8,command=lambda: textbox.delete('1.0', 'end'))
clear_button.grid(row=90, column=2)

update_button = tk.Button(window, text="Update Record", command=update,bg="yellow",font=3)
update_button.place(x=920,y=253)

from datetime import date

today = date.today().strftime("%B %d, %Y")
date_label = tk.Label(window, text=f'Date : {today}' , font=12)
date_label.place(x=20,y=15)


retrive_button = tk.Button(window, text="Get Data",bg="yellow", font=3,command=retrieve_data)
retrive_button.grid(row=7, column=3)


success_label = tk.Label(window, fg="yellow",bg="grey",font=5)
success_label.grid(row=3, column=1)


success_label1 = tk.Label(window, fg="yellow",bg="grey",font=5)
success_label1.grid(row=10, column=2)

window.mainloop()