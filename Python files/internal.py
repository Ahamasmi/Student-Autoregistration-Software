from selenium import webdriver
import keyboard
from selenium.webdriver.common.keys import Keys
import time
class Autofill:
    def __init__(self,Student_Name, JEE_Roll_Number, JEE_Rank, Fathers_Name,Mothers_Name, Category, Contact_Number,Alternate_contact_number, Email_Id, Address, Aadhar_Number,
       Date_of_Birth, Semester,Branch,Percentage_12th, CGPA_10th,Gender,Gap):
        self.Student_Name=Student_Name#
        self.JEE_Roll_Number=JEE_Roll_Number#
        self.JEE_Rank=JEE_Rank#
        self.Fathers_Name=Fathers_Name#
        self.Mothers_Name=Mothers_Name#
        self.Category=Category#
        self.Contact_Number=Contact_Number#
        self.Alternate_contact_number=Alternate_contact_number#
        self.Email_Id=Email_Id#
        self.Address=Address#
        self.Aadhar_Number=Aadhar_Number#
        self.Date_of_Birth=Date_of_Birth#
        self.Semester=Semester#
        self.Branch=Branch#
        self.Percentage_12th=Percentage_12th#
        self.CGPA_10th=CGPA_10th#
        self.Gender=Gender#
        self.Gap=Gap
        self.bot=webdriver.Firefox()
        #self.bot=webdriver.Edge()
        #self.bot=webdriver.Edge

    def fill (self):
        bot = self.bot
        bot.get('http://localhost/Sih/reg_form.php')
        bot.maximize_window();
        time.sleep(0.5)
        #1
        field=bot.find_element_by_id('studentName')
        field.clear()
        field.send_keys(self.Student_Name)
        #2
        field=bot.find_element_by_id('fatherName')#copy id of student fathers name
        field.clear()
        field.send_keys(self.Fathers_Name)
        #3
        field=bot.find_element_by_id('motherName')#copy id of
        field.clear()
        field.send_keys(self.Mothers_Name)
        #4
        field=bot.find_element_by_id('branch')#copy id of
        field.clear()
        field.send_keys(self.Branch)
        #5
        field=bot.find_element_by_id('roll')#copy id of
        field.clear()
        field.send_keys(self.JEE_Roll_Number)
        #6
        field=bot.find_element_by_id('air')#copy id of
        field.clear()
        field.send_keys(self.JEE_Rank)
        #7
        field=bot.find_element_by_id('category')#copy id of
        field.clear()
        field.send_keys(self.Category)
        #8
        field=bot.find_element_by_id('contactNo')#copy id of
        field.clear()
        field.send_keys(self.Contact_Number)
        #9
        field=bot.find_element_by_id('altContactNo')#copy id of
        field.clear()
        field.send_keys(self.Alternate_contact_number)
        #10
        field=bot.find_element_by_id('emailId')#copy id of
        field.clear()
        field.send_keys(self.Email_Id)
        #11
        field=bot.find_element_by_id('addr')#copy id of
        field.clear()
        field.send_keys(self.Address)
        #12
        field=bot.find_element_by_id('aadhar')#copy id of
        field.clear()
        field.send_keys(self.Aadhar_Number)
        #13
        field=bot.find_element_by_id('dob')#copy id of
        field.clear()
        field.send_keys(self.Date_of_Birth)
        #14
        field=bot.find_element_by_id('sem')#copy id of
        field.clear()
        field.send_keys(self.Semester)
        #15
        field=bot.find_element_by_id('twelveP')#copy id of
        field.clear()
        field.send_keys(self.Percentage_12th)
        #16
        field=bot.find_element_by_id('tenP')#copy id of
        field.clear()
        field.send_keys(self.CGPA_10th) 
        #17
        field=bot.find_element_by_id('gender')#copy id of
        field.clear()
        field.send_keys(self.Gender)   
        #18
        if(self.Gap.lower()=='yes'):
            field=bot.find_element_by_id('gap_y')#copy id of
            field.click()
        elif(self.Gap.lower()=='no'):
            field=bot.find_element_by_id('gap_n')#copy id of
            field.click()
        time.sleep(0.1)
        field=bot.find_element_by_id('check')
        field.click()
        #keyboard.press_and_release('ctrl+r')
        #field=bot.find_element_by_id('submit')#copy id of
        #field.click()
        
        
             





  









