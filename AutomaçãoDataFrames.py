import pandas as pd
import pyautogui
import time
class ReadData():
    def __init__(self):
        pass

    def LerDados(self):
        self.leitura=pd.read_csv("BaseDeDados.csv")
        print(self.leitura)

class Automation(ReadData):
    def __init__(self):
        pass

    def TakePosição(self):
        time.sleep(5)
        print(pyautogui.position())

    def PrimeiraAção(self):
        super().LerDados()
        for linha in self.leitura.index:
            time.sleep(2)
            pyautogui.doubleClick(661,373)
            pyautogui.write(str(self.leitura.loc[linha,"Nomes"]))
            pyautogui.press("tab")
            time.sleep(2)
            pyautogui.write(str(self.leitura.loc[linha,"Sobrenomes"]))
            pyautogui.press("tab")
            time.sleep(1)
            pyautogui.write(str(self.leitura.loc[linha,"DataDeNascimento"]))
            pyautogui.press("tab")
            time.sleep(1)
            pyautogui.write(str(self.leitura.loc[linha,'Palavras-Chaves']))
            pyautogui.press("tab")
            time.sleep(1)
            pyautogui.write(str(self.leitura.loc[linha,'Email']))
            pyautogui.press("tab")
            time.sleep(1)
            pyautogui.write(str(self.leitura.loc[linha,'Estados']))
            pyautogui.press("tab")
            time.sleep(1)
            pyautogui.write(str(self.leitura.loc[linha,"Cidades"]))
            pyautogui.press("Enter")
            time.sleep(2)
            pyautogui.press("tab")
            pyautogui.press("enter")

ExbScript=Automation()
ExbScript.PrimeiraAção()