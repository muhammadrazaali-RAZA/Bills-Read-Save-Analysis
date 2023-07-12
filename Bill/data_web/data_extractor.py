import cv2
import numpy as np
import easyocr
import sys



# im_path = r'C:\Users\Raza_Jutt\Desktop\Cliforfd\billing\pattern_1\watermlai_page-0001.jpg'

def recognize_text(img_path):
    '''loads an image and recognizes text.'''
    
    reader = easyocr.Reader(['en'])
    return reader.readtext(img_path)

def remv_noise(s):
    s = s.replace('}', '')
    s = s.replace('{', '')
    s = s.replace('[', '')
    s = s.replace(']', '')
    s = s.replace(',', '')
    s = s.replace(' ', '')
    return s

def div_date(d):
    f_d = ""
    n = 0
    for i in d:
        n = n+1
        if i == "-":
            return f_d, d[n:]
        f_d = f_d+i



def pattern_1(im_path):
    cus_num=ser_prd=ser_prdf =ser_prdl=ser_add=metr_no=lt_year=lt_read=ct_read=usage=sewer=cty_tx=water=stormwt=tot_pay="Unable to find"
    result = recognize_text(im_path)
    pattern = 0
    for i in range (0,len(result)):
        if result[i][1] == 'CHARGES DUE':
            cus_num = result[i+3][1]
            ser_prd = result[i+5][1]+" - "+result[i+6][1]
        elif result[i][1] == 'DUE':
            if result[i+1][1] == 'DATE':
                cus_num = result[i+2][1]
                ser_prd = result[i+4][1]+" - "+result[i+5][1]
        if result[i][1] == 'LAST YEAR':
            ser_add = result[i+3][1]
            metr_no = result[i+4][1]
            #######################
            if int(result[i+5][1])>= 200:
                lt_year = 0
                lt_read = result[i+5][1]
                ct_read = result[i+6][1]
                if result[i+8][1]== "NEWS & NOTES":
                    usage = 0
                else:
                    usage = result[i+7][1]
            else:
                lt_year = result[i+5][1]
                lt_read = result[i+6][1]
                ct_read = result[i+7][1]
                if result[i+9][1]== "NEWS & NOTES":
                    usage = 0
                else:
                    usage = result[i+8][1]
            #######################
        if result[i][1] == 'SEWER':
            sewer = result[i+1][1]
            sewer = sewer[1:]
            pattern = 1


        if result[i][1] == 'CITY TAX':
            cty_tx = result[i+1][1]
            cty_tx = cty_tx[1:]
        if result[i][1] == 'WATER':
            water = result[i+1][1]
            water = water[1:]
            pattern = 1
        
        if result[i][1] == 'CITY STORMWATER':
            stormwt = result[i+1][1]
            stormwt = stormwt[1:]
            pattern = 1
        
        if result[i][1] == 'PAY THIS AMOUNT':
            tot_pay = result[i+1][1]
            tot_pay = tot_pay[1:]
        if result[i][1] == 'IRRIGATION':
            irrg = result[i+1][1]
            irrg = irrg[1:]
            
    cus_num = str(cus_num) #
    ser_prd = str(ser_prd)
    ser_add = str(ser_add) #
    metr_no = str(metr_no) #
    lt_year = str(lt_year) #
    lt_read = str(lt_read) #
    ct_read = str(ct_read) #
    usage = str(int(ct_read) -  int(lt_read))
    tot_pay = str(tot_pay) #    
    cty_tx = str(cty_tx) #

    if pattern:
        sewer = str(sewer) #
        sewer = remv_noise(sewer)
        water = str(water) #
        water = remv_noise(water)
        stormwt = str(stormwt) #
        stormwt = remv_noise(stormwt)
    else:
        irrg = str(irrg) #
        irrg = remv_noise(irrg)
    
    ser_prdf, ser_prdl = div_date(ser_prd)

    ser_prdf = remv_noise(ser_prdf)
    ser_prdl = remv_noise(ser_prdl)

    ser_prdf = "20"+ser_prdf[6:]+"-"+ser_prdf[0:2]+"-"+ser_prdf[3:5]
    ser_prdl = "20"+ser_prdl[6:]+"-"+ser_prdl[0:2]+"-"+ser_prdl[3:5]

    cty_tx = remv_noise(cty_tx)
    tot_pay = remv_noise(tot_pay)

#     print(cus_num, ser_prd, ser_add, metr_no, lt_year, lt_read, ct_read, usage, tot_pay, cty_tx)

    if pattern:
        with open('temp/values.txt', 'w') as f:
            f.write("1"+ "\n" +cus_num+ "\n" +ser_prdf+ "\n" +ser_prdl+ "\n" +ser_add+ "\n" +metr_no+ "\n" +lt_year+ "\n" +lt_read+ "\n" +ct_read+ "\n" +usage+ "\n" +sewer+ "\n" +cty_tx+ "\n" +water+ "\n" +stormwt+ "\n" +tot_pay)
    else:
        with open('temp/values.txt', 'w') as f:
            f.write("0"+ "\n" +cus_num+ "\n" +ser_prdf+ "\n" +ser_prdl+ "\n" +ser_add+ "\n" +metr_no+ "\n" +lt_year+ "\n" +lt_read+ "\n" +ct_read+ "\n" +usage+ "\n" +cty_tx+ "\n" +irrg+ "\n" +tot_pay)


def main(arg1):
    pattern_1(arg1)


if __name__ == "__main__":
    main(sys.argv[1])