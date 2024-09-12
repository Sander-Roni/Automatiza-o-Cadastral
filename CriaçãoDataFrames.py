import pandas as pd
class CriaçãoDataFrames():
    def __init__(self):
        self.Base={
            "Nomes":
            ['Jailson','Golias','Henrique','Nicolas','Laurencio','Chico','Tales','Richard','Pedro','Maicon'],
            "Sobrenomes":
            ['Xavier','Camargo','Araújo','Buckerman','Galvão','Almeida','Pereira','Pondé','Claudio','Antonio'],
            "DataDeNascimento":
            ['28072000','17041999','14051970','12052001','16081987','11092006','25011983','05031765','03071988','20091992'],
            "Palavras-Chaves":
            ['Marn*12','Dt13#11','At@xy22','Yyp6##va','P$avx11','Vdx66u*','Da812#x','Kv!51d2','Bj&55bv1','Yy_0@1an'],
            "Email":
            ['JXavier@Yahoo.com','GCamargo@Yahoo.com','HAraujo@Gmail.com','NiBuckerman@Outlook.com','LawGal@Hotmail.com','cAlmeidico@bol.com.br','PerTales@gmail.com','PondéZinh@Orkut.com','PedroCl@Gmail.com','AntMaicon@Bol.com.br'],
            "Estados":
            ['SãoPaulo','RioDeJaneiro','Amapa','Amazonas','RioGrandeDoSul','Brasilia','Alagoas','MinasGerais','Paraná','Pernambuco'],
            "Cidades":
            ['Mirassol','CaboFrio','Cútias','Anamã','PortoAlegre','Taguátinga','Craíbas','Tiradentes','Foz do iguaçu','Recife']
        }

    def CriarTransformar(self):
        self.BaseDados=pd.DataFrame(self.Base)
        self.BaseDados.to_csv("BaseDeDados.csv")
        print(self.BaseDados)

def main():
    ObScript=CriaçãoDataFrames()
    ObScript.CriarTransformar()

if __name__ == "__main__":
    main()