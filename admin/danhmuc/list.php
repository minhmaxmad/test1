<div class="">
        <div class="border-2 border-black rounded-md py-2 bg-green-200">
            <h1 class="px-2 font-bold ">DANH SÁCH HÀNG HÓA</h1>
        </div>
        <br>
        <div>
            <table class="">
                <tr>
                    <th class="border-2 text-white bg-black font-bold px-[]"></th>
                    <th class="border-2 text-white bg-black font-bold px-10">Mã loại</th>
                    <th class="border-2 text-white bg-black font-bold px-10 ">Tên loại</th>
                    <th class="border-2 text-white bg-black font-bold px-[]"></th>
                </tr>
          <?php
              foreach ($listdanhmuc as $danhmuc){
                    extract($danhmuc);
                    echo '<tr>
                    <td class="border-2 px-[150px]"><input type="checkbox" name="" id> </td>
                    <td class="border-2 px-[150px]">.$id.</td>
                    <td class="border-2 px-[150px]">.name.</td>
                    <td class="border-2 py-2 px-[150px]">
                        <a href="">
                            <button
                                class="border-2 border-black rounded-md px-4 text-white bg-black font-bold hover:text-red-300 active:text-green-300 hover:scale-105">Sửa</button>
                        </a>
                        <a href="">
                            <button
                                class="border-2 border-black rounded-md px-4 text-white bg-black font-bold hover:text-red-300 active:text-green-300 hover:scale-105">Xóa</button>
                        </a>
                    </td>
                </tr>';
              }
           ?>
            </table>
            <br>
        </div>
        <div class="px-4 py-2">
                <br>
                <div>
                    <button><a href="#"
                            class="text-white bg-black rounded-md py-2 px-2 font-bold hover:text-red-300 active:text-green-300 hover:scale-105">Chọn
                            tất cả</a></button>
                    <button><a href="#"
                            class="text-white bg-black rounded-md py-2 px-2 font-bold hover:text-red-300 active:text-green-300 hover:scale-105">Bỏ
                            chọn tất cả</a></button>
                    <button><a href="#"
                            class="text-white bg-black rounded-md py-2 px-2 font-bold hover:text-red-300 active:text-green-300 hover:scale-105">Xóa
                            các mục chọn</a></button>
                    <button><a href="./admin.html"
                            class="text-white bg-black rounded-md py-2 px-2 font-bold hover:text-red-300 active:text-green-300 hover:scale-105">Nhập
                            thêm</a></button>
                </div>
        </div>
    </div>