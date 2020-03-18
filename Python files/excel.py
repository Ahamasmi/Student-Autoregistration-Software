import xlrd 
import re
import datetime
from internal import *
def check(x,y,z):
    regex = '^\w+([\.-]?\w+)@\w+([\.-]?\w+)(\.\w{2,3})+$'
    error=" "
    if (y==0)or(y==3)or(y==4)or(y==5)or(y==13)  :
        flag=0            
        if all(k.isalpha() or k.isspace() for k in x):
            flag=1
        if (flag==0):
            print("Name should only contain alphabets")
            error="Error occured at row "+str(z)
            print(error)
            return(error)    
    
    elif (y==1)or(y==10)or(y==12):
        flag=0
        if x.isdigit():
            flag=1
        if (flag==0):
            print("Number format has incorrect format")
            error="Error occured at row "+str(z)
            print(error)
            return(error)          
            
    elif ((y==7)or(y==6)):
        flag=0
        if len(x) == 10 and x.isdigit():
            flag=1
        if (flag==0):
            print("Phone number not correct")
            error="Error occured at row "+str(z)
            print(error)
            return(error)
    elif(y==8):
        flag=0
        if(re.search(regex,x)):
            flag=1
        if (flag==0):
            print("Not a valid email")
            error="Error occured at row "+str(z)
            print(error)
            return(error)
    elif(y==11):
        #print(x)
        x=str(x)
        year,month,day = x.split('/')
        isValidDate = True
        try :
            datetime.datetime(int(year),int(month),int(day))
        except ValueError :
            isValidDate = False
        if(isValidDate) :
            pass
        else :
            print("Not a valid date")
            error="Error occured at row "+str(z)
            print(error)
            return(error)
    elif (y==17):
        x=x.lower()
        if (x=='yes')or(x=='no'):
            pass
        else:
            print("Not a valid")    
            error="Error occured at row "+str(z)
            print(error)
    elif (y==15 or y==14):
        x=float(x)
        #x=x*100
        #print(x)
        if(x>100):
            print("Percentage error!")
            error="Percentage error occured at row "+str(z)
            return (error)
    return (error)

def ip(rno):
    status=" "
    loc = ("C:\\Users\\Gopal Pandey\\Documents\\second year\\Fourth sem\\SIH\\f1.xlsx")
    wb = xlrd.open_workbook(loc) 
    sheet = wb.sheet_by_index(0) 
    sheet.cell_value(0, 0) 


    arr=["Student_Name","JEE_Roll_Number","JEE_Rank","Father's_Name","Mother's_Name","Category", "Contact_Number",
        "Alternate_contact_number", 'Email_Id', 'Address', 'Aadhar_Number',
        'Date_of_Birth', 'Semester', 'Branch', '12th_Percentage', '10th_Percentage','Gender','Gap']

    indexjee=1
    j=0  
    colval=[]
    countc=len(arr)
    countr=sheet.nrows
    #print(countc," ",countr)
    for i in range(sheet.ncols):
        l=arr[j]
        colval.append(l)
        if (j==countc-1):
            break
        j+=1

    sheet = wb.sheet_by_index(0) 
    sheet.cell_value(0, 0) 
    n=rno
    #print(n)
    found=0
    rowval=[]
    for i in range(1,countr):
        temp=sheet.row_values(i)[indexjee]
        temp=int(temp)
        temp=str(temp)
       # print(type(temp))
        #print(temp)
        if (temp==n):
           # print("Found")
            found=1
            rowi=i
            rowval.append(sheet.row_values(i))
    if found==0:
        return("Roll Number not found!!")
    for i in range (countc):
        if (i==1)or(i==2)or (i==7)or(i==6)or(i==10)or(i==12):
            #print(rowval[0][i])
            rowval[0][i]=int(rowval[0][i])
            rowval[0][i]=str(rowval[0][i])
        if (i==14):
                rowval[0][i]=str(rowval[0][i])
        if (i==15):
                rowval[0][i]=str(rowval[0][i])
    for i in range (countc):
        status=check(rowval[0][i],i,rowi+1)
        if status!=" ":
            break

    #print("@"+status)
    if(status==" "):
        Student_Name = rowval[0][0]
        JEE_Roll_Number= rowval[0][1]
        JEE_Rank= rowval[0][2]
        Fathers_Name= rowval[0][3]
        Mothers_Name= rowval[0][4]
        Category= rowval[0][5]
        Contact_Number= rowval[0][6]
        Alternate_contact_number= rowval[0][7]
        Email_Id= rowval[0][8]
        Address= rowval[0][9]
        Aadhar_Number= rowval[0][10]
        Date_of_Birth= rowval[0][11]
        Semester= rowval[0][12]
        Branch= rowval[0][13]
        Percentage_12th= rowval[0][14]
        CGPA_10th= rowval[0][15]
        Gender=rowval[0][16]
        Gap=rowval[0][17]
        obj=Autofill(Student_Name, JEE_Roll_Number, JEE_Rank, Fathers_Name,Mothers_Name, Category, Contact_Number,Alternate_contact_number, Email_Id, Address, Aadhar_Number,Date_of_Birth, Semester,Branch,Percentage_12th, CGPA_10th,Gender,Gap)
        obj.fill()
    return(status)


