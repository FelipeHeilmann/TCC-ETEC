<div class="modal-bg" id="modal-risk">
    <div class="modal">
        <header class="modal-header">
            <button class="back-btn" id="back-btn">
                <i class="fa fa-chevron-left" aria-hidden="true"></i>
            </button>
            <h2>Denúncia de animal em risco</h2>
        </header>
        <main class="modal-main">
            <form action="denuncia_risco.php" method="POST" enctype="multipart/form-data">
            <div class="modal-iten">
                <h3>Espécie</h3>
                <select name="select_specie_risk">
                <option>Selecione</option>
                    <?php
                        $sql_especie = "SELECT * from tb04_especie";
                        $sql_especie_exec = mysqli_query($conn, $sql_especie);
                        while($row_especie = mysqli_fetch_assoc($sql_especie_exec)){?>
                            <option value="<?php echo $row_especie['tb04_id_especie'];?>"><?php echo $row_especie['tb04_descricao'];?></option><?php
                    }?>  
                </select>
            </div>
            <div class="modal-iten">
                <h3>Porte</h3>
                <select name="select_size_risk" >
                <option>Selecione</option>
                    <?php
                        $sql_porte = "SELECT * from tb05_porte";
                        $sql_porte_exec = mysqli_query($conn, $sql_porte);
                        while($row_porte = mysqli_fetch_assoc($sql_porte_exec)){?>
                            <option value="<?php echo $row_porte['tb05_id_porte'];?>"><?php echo $row_porte['tb05_descricao'];?></option><?php
                    }?>  
                </select>
            </div>
            <div class="modal-iten">
                <h3>Cor</h3>
                <select name="select_color_risk">
                <option>Selecione</option>
                    <?php
                        $sql_cor = "SELECT * from tb03_cor";
                        $sql_cor_exec = mysqli_query($conn, $sql_cor);
                        while($row_cor = mysqli_fetch_assoc($sql_cor_exec)){?>
                            <option value="<?php echo $row_cor['tb03_id_cor'];?>"><?php echo $row_cor['tb03_descricao'];?></option><?php
                    }?>  
                </select>
            </div>
            <div class="modal-iten">
                <h3>OBS</h3>
                <input type="text" name="note_risk">
            </div>
            <div class="modal-iten">
                <h3>Contato</h3>
                <input type="text" id="phone-risk" name="contact_risk" placeholder="Telefone para contato">
            </div>
            <div class="modal-iten">
                <h3>Foto</h3>
                <label class="label-input-file" for="photo_risk">Escolher foto</label>
                <input multiple id="photo_risk" name="photo-risk" type="file">
            </div>
            <button type="submit" name="submit-risk" class="btn-modal">Reportar</button>
            <input class="latitude" id="latitude_risk" type="text" name="latitude_risk">
            <input class="longitude" id="longitude_risk" type="text" name="longitude_risk">
            <h5 class="note">Denúncias de animais em risco ficam disponíveis apenas para ONGs</h5>
            </form>
        </main>   
    </div>        
</div>