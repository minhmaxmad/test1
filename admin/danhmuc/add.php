<div class="">
    <div class="border-2 border-black rounded-md py-2 bg-green-200">
        <h1 class="px-2 font-bold ">THÊM MỚI HÀNG HÓA</h1>
    </div>
    <div class="px-4 py-2">
        <form action="index.php?act=adddm" method="POST">
            <div>
                <label for="">Mã Loại</label> <br>
                <input type="text" name="maloai" placeholder="auto number" disabled class="w-full font-bold bg-[#BDBDBD]">
            </div>
            <div>
                <label for="">Tên loại</label> <br>
                <input type="text" name="tenloai" class="bg-[#BDBDBD] w-full">
            </div>
            <br>
            <div>
                <!-- <input type="button" name="themmoi" value="Thêm mới"> -->
                <button name="themmoi"><a href="#" name="themmoi" class="text-white bg-[#BDBDBD] rounded-md py-2 px-2 font-bold hover:text-red-300 active:text-green-300 hover:scale-105">Thêm mới</a></button>
                <button><a href="#" class="text-white bg-[#BDBDBD] rounded-md py-2 px-2 font-bold hover:text-red-300 active:text-green-300 hover:scale-105">Nhập lại</a></button>
                <button><a href="index.php?act=listdm" class="text-white bg-[#BDBDBD] rounded-md py-2 px-2 font-bold hover:text-red-300 active:text-green-300 hover:scale-105">Danh sách</a></button>
            </div>
            <?php
               if(isset($thognbao)&&($thognbao="")) echo $thognbao;
            ?>
        </form>
    </div>
</div>