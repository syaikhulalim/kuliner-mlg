        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-6">
                <div class="jumbotron">
                <div class="post-preview">
                    <h2 class="post-title">
                        <?=$kuliner_list['nama']?>
                    </h2>
                    <p class="post-meta">
                        <?=$kuliner_list['alamat']?>
                    </p>
                    <p class="post-file">
                        <img src="<?php echo base_url()?>assets/uploads/<?php echo $kuliner_list['foto']?>" alt="" width=800 height=455>
                    <p class="text-justify">
                        <?=$kuliner_list['keterangan']?>
                    </p>
                </div>
                <hr>
            </div>
            </div>
 

            <div class="col-sm-2">
                <div class="jumbotron">
                <form action="<?php echo base_url('index.php/item/hasil')?>" action="GET">
                <div class="form-group">
                    <label for="cari"><h2>Cari Data : </h2></label>
                    <input type="text" class="form-control" id="cari" name="cari" placeholder="cari">
                </div>
                <input class="btn btn-primary" type="submit" value="Cari">
                </form>
                </div>
            </div>
        </div>