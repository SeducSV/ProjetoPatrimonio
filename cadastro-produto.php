<section id="servicos" class="caixa">
   <div class="secao-title">
      <h3>Nova Produto</h3>
   </div>
   <form action="salvarProduto" method="POST">
      <div class="mb-3">
         <label>Nome do Produto</label>
         <input type="nome" name="nm_Produto" class="form-control">
      </div>
      <div class="mb-3">
         <label for="cars">Voltagem (Eletrodomésticos):</label>
         <select name="ds_tesao" id="ds_tesao">
            <option value='' disabled selected>Selecione a voltagem</option>
            "
            <option value="220v">220v</option>
            <option value="110v">110v</option>
            <option value="Bivolt">Bivolt</option>
         </select>
      </div>
      <div class="mb-3">
         <label>Descrição do Produto</label>
         <input type="text" name="ds_Produto" class="form-control">
      </div>
      <div class="mb-3">
         <label>Quantidade</label>
         <input type="number" name="qt_produto" class="form-control">
      </div>
      <div class="mb-3">
         <button type="submit" class="btn btn-primary">Enviar</button>
      </div>
   </form>
</section>