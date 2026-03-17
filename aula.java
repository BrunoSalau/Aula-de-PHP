import java.util.Scanner;
public class Aula2 {
    public static void main(String[] args) {
        Scanner entrada = new Scanner(System.in);
        int[][] matriz = new int[3][3];

        for(int i = 0;i<3;i++){
            for(int y = 0;y<3;y++){
                System.out.print("Digite o valor da poçição ["+(i+1)+"] ["+(y+1)+"]:");
                matriz[i][y] = entrada.nextInt();
            }
        }

        int linha1,linha2,linha3;
        int coluna1,coluna2,coluna3;
        int diagonal;

        linha1 = matriz[0][0] + matriz[0][1] + matriz[0][2];
        linha2 = matriz[1][0] + matriz[1][1] + matriz[1][2];
        linha3 = matriz[2][0] + matriz[2][1] + matriz[2][2];

        coluna1 = matriz[0][0] + matriz[1][0] + matriz[2][0];
        coluna2 = matriz[0][1] + matriz[1][1] + matriz[2][1];
        coluna3 = matriz[0][2] + matriz[1][2] + matriz[2][2];

        diagonal = matriz[0][0] + matriz[1][1] + matriz[2][2];

        if(linha1 == 15){
            if(linha2 == 15){
                if(linha3 == 15){
                    if(coluna1 == 15){
                        if(coluna2 == 15){
                            if(coluna3 == 15){
                                if(diagonal == 15){
                                    System.out.println("Esta pronto");
                                }
                            }
                        }
                    }
                }
            }
        }
        

        

    }
}
