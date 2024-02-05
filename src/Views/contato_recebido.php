<?=$this->fetch('commons/header.php', $data)?>
<main>
   <section class="mensagem-recebida">
       <div class="container">
           <div class="conteudo">
               <h1>Mensagem recebida!</h1>
               <p>Sua mensagem foi recebida com sucesso, em breve nosso time entrará em contato com você. Obrigado!</p>
               <a class="btn" href="<?=URL_BASE?>">VOLTAR PARA HOME</a>
           </div>
       </div>
   </section> 
</main>
<?=$this->fetch('commons/footer.php', $data)?>