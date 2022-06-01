import smtplib
from email.mime.multipart import MIMEMultipart
from email.mime.text import MIMEText
import os

from_address = os.environ['EMAIL']
to_address = ["arunpragashap.19msc@kongu.edu"] #REPLACE with the to addresses you wish to send
message = MIMEMultipart()
message['From'] = from_address
message['To'] = " ,".join(to_address)
message['subject'] = 'Hello from SMTP'

body = "Hello from Python code"

message.attach(MIMEText(body,'plain'))

email = os.environ['EMAIL']
password = os.environ['PASSWORD']

mail = smtplib.SMTP('smtp.gmail.com',587)
mail.ehlo()
mail.starttls()
mail.login(email,password)
text = message.as_string()
mail.sendmail(from_address,to_address,text)
mail.quit()