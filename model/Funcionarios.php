<?php



class Funcionarios extends Usuarios {

private $salario;




function __construct($nome,$idade,$cpf,$login,$senha,$salario){

parent:: __construct($nome,$idade,$cpf,$login,$senha);

$this->salario = $salario;


}


public function getSalario(){

return $this->salario;


}

public function setSalario($salario){


$this->salario = $salario;


}




   

public function cadastrarPessoa($con, $funcionario,$tipoPessoa){
    try{
        $query = $con->prepare("INSERT INTO usuarios (nome, idade, cpf, usuario, senha,salario ,tipo_pessoa) VALUES(?,?,?,?,?,?,?)");
        $query->execute([
            $funcionario->getNome(),
            $funcionario->getIdade(),
            $funcionario->getCpf(),
            $funcionario->getLogin(),
            $funcionario->getSenha(),
            $funcionario->getSalario(),
            $tipoPessoa        
            ]);

        return $query;
    }catch(PDOException $e){
       
        return false;
    }
}



        
           
        

















    
}




?>

