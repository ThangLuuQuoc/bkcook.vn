@extends('customer.layouts.master')
@section('content')

<section id="vungmien" class="vungmien danhmucchitiet">
    <div class="container">
        <h3 class="text-success text-center">Danh sách vùng miền</h3>
        <div class="row list-group-item">
            <div class="col-sm-2 col-xs-6">
                <input type="checkbox" name="checkbox-mienbac" value="1" id="checkbox-mienbac">
                <label for="checkbox-mienbac">Miền Bắc</label>
            </div>
            <div class="col-sm-2 col-xs-6">
                <input type="checkbox" name="checkbox-mientrung" id="checkbox-mientrung">
                <label for="checkbox-mientrung">Miền Trung</label>
            </div>
            <div class="col-sm-2 col-xs-6">
                <input type="checkbox" name="checkbox-miennam" id="checkbox-miennam">
                <label for="checkbox-miennam">Miền Nam</label>
            </div>
            <div class="col-sm-2 col-xs-6">
                <input type="checkbox" name="checkbox-taynguyen" id="checkbox-taynguyen">
                <label for="checkbox-taynguyen">Tây Nguyên</label>
            </div>
            
        </div>

        <div class="item-mienbac gioithieu-vungmien">
            Miền Bắc với những đặc sản như phở, bún chả, ... chắc chắn sẽ làm hài lòng ngay cả với những ai khó tính nhất ...
        </div>

        <div class="item-miennam gioithieu-vungmien">
            Miền Nam với những đặc sản như ...
        </div>

        <div class="item-mientrung gioithieu-vungmien">
            Miền Trung với những đặc sản như bún bò Huế, ...
        </div>

        <div class="item-taynguyen gioithieu-vungmien">
            Tây Nguyên với những đặc sản như ...
        </div>

        <h3 class="text-success text-center" style="margin-top:3em;">Danh sách món ăn</h3>

        <div class="danhsachcon">
            <a href="#" class="fooditem col-sm-3 col-xs-12 item-taynguyen">
                <h5 class="tieude">Súp hạt sen</h5>
                <img src="vendor_customer/assets/images/suphatsen.jpg" alt="">
                <p class="mota">Súp, là món ăn lỏng như canh kiểu Âu, được làm bằng nhiều nguyên liệu kết hợp với nhau như thịt, cá và rau, đậu, trái cây, nước hoặc các chất lỏng khác, có thêm gia vị, thường ăn vào đầu bữa cơm kiểu Âu như một món khai vị hay bữa điểm tâm.</p>
                <span class="thechia"></span>
                <span class="social">
                    <span><i class="fa fa-cutlery"></i> 17 món ăn</span>
                    <span><i class="fa fa-comments"></i> 11 bình luận</span>
                </span>
            </a>

            <a href="#" class="fooditem col-sm-3 col-xs-12 item-mienbac">
                <h5 class="tieude">Mì vịt tiềm</h5>
                <img src="vendor_customer/assets/images/mivittiem.jpg" alt="">
                <p class="mota">Lẩu, là món ăn lỏng như canh kiểu Âu, được làm bằng nhiều nguyên liệu kết hợp với nhau như thịt, cá và rau, đậu, trái cây, nước hoặc các chất lỏng khác, có thêm gia vị, thường ăn vào đầu bữa cơm kiểu Âu như một món khai vị hay bữa điểm tâm. Lẩu, là món ăn lỏng như canh kiểu Âu, được làm bằng nhiều nguyên liệu kết hợp với nhau như thịt, cá và rau, đậu, trái cây, nước hoặc các chất lỏng khác, có thêm gia vị, thường ăn vào đầu bữa cơm kiểu Âu như một món khai vị hay bữa điểm tâm.</p>
                <span class="thechia"></span>
                <span class="social">
                    <span><i class="fa fa-cutlery"></i> 17 món ăn</span>
                    <span><i class="fa fa-comments"></i> 11 bình luận</span>
                </span>
            </a>

            <a href="#" class="fooditem col-sm-3 col-xs-12 item-mientrung">
                <h5 class="tieude">Snack rong biển</h5>
                <img src="vendor_customer/assets/images/suphatsen.jpg" alt="">
                <p class="mota">Lẩu, là món ăn lỏng như canh kiểu Âu, được làm bằng nhiều nguyên liệu kết hợp với nhau như thịt, cá và rau, đậu, trái cây, nước hoặc các chất lỏng khác, có thêm gia vị, thường ăn vào đầu bữa cơm kiểu Âu như một món khai vị hay bữa điểm tâm.</p>
                <span class="thechia"></span>
                <span class="social">
                    <span><i class="fa fa-cutlery"></i> 17 món ăn</span>
                    <span><i class="fa fa-comments"></i> 11 bình luận</span>
                </span>
            </a>

            <a href="#" class="fooditem col-sm-3 col-xs-12 item-miennam">
                <h5 class="tieude">Cơm cuộn chả bông</h5>
                <img src="vendor_customer/assets/images/comcuonchabong.jpeg" alt="">
                <p class="mota">Lẩu, là món ăn lỏng như canh kiểu Âu, được làm bằng nhiều nguyên liệu kết hợp với nhau như thịt, cá và rau, đậu, trái cây, nước hoặc các chất lỏng khác, có thêm gia vị, thường ăn vào đầu bữa cơm kiểu Âu như một món khai vị hay bữa điểm tâm.</p>
                <span class="thechia"></span>
                <span class="social">
                    <span><i class="fa fa-cutlery"></i> 17 món ăn</span>
                    <span><i class="fa fa-comments"></i> 11 bình luận</span>
                </span>
            </a>

            <a href="#" class="fooditem col-sm-3 col-xs-12 item-taynguyen">
                <h5 class="tieude">Súp hạt sen</h5>
                <img src="vendor_customer/assets/images/suphatsen.jpg" alt="">
                <p class="mota">Súp, là món ăn lỏng như canh kiểu Âu, được làm bằng nhiều nguyên liệu kết hợp với nhau như thịt, cá và rau, đậu, trái cây, nước hoặc các chất lỏng khác, có thêm gia vị, thường ăn vào đầu bữa cơm kiểu Âu như một món khai vị hay bữa điểm tâm.</p>
                <span class="thechia"></span>
                <span class="social">
                    <span><i class="fa fa-cutlery"></i> 17 món ăn</span>
                    <span><i class="fa fa-comments"></i> 11 bình luận</span>
                </span>
            </a>

            <a href="#" class="fooditem col-sm-3 col-xs-12 item-mienbac">
                <h5 class="tieude">Mì vịt tiềm</h5>
                <img src="vendor_customer/assets/images/mivittiem.jpg" alt="">
                <p class="mota">Lẩu, là món ăn lỏng như canh kiểu Âu, được làm bằng nhiều nguyên liệu kết hợp với nhau như thịt, cá và rau, đậu, trái cây, nước hoặc các chất lỏng khác, có thêm gia vị, thường ăn vào đầu bữa cơm kiểu Âu như một món khai vị hay bữa điểm tâm. Lẩu, là món ăn lỏng như canh kiểu Âu, được làm bằng nhiều nguyên liệu kết hợp với nhau như thịt, cá và rau, đậu, trái cây, nước hoặc các chất lỏng khác, có thêm gia vị, thường ăn vào đầu bữa cơm kiểu Âu như một món khai vị hay bữa điểm tâm.</p>
                <span class="thechia"></span>
                <span class="social">
                    <span><i class="fa fa-cutlery"></i> 17 món ăn</span>
                    <span><i class="fa fa-comments"></i> 11 bình luận</span>
                </span>
            </a>

            <a href="#" class="fooditem col-sm-3 col-xs-12 item-mientrung">
                <h5 class="tieude">Snack rong biển</h5>
                <img src="vendor_customer/assets/images/mivittiem.jpg" alt="">
                <p class="mota">Lẩu, là món ăn lỏng như canh kiểu Âu, được làm bằng nhiều nguyên liệu kết hợp với nhau như thịt, cá và rau, đậu, trái cây, nước hoặc các chất lỏng khác, có thêm gia vị, thường ăn vào đầu bữa cơm kiểu Âu như một món khai vị hay bữa điểm tâm.</p>
                <span class="thechia"></span>
                <span class="social">
                    <span><i class="fa fa-cutlery"></i> 17 món ăn</span>
                    <span><i class="fa fa-comments"></i> 11 bình luận</span>
                </span>
            </a>

            <a href="#" class="fooditem col-sm-3 col-xs-12 item-miennam">
                <h5 class="tieude">Cơm cuộn chả bông</h5>
                <img src="vendor_customer/assets/images/comcuonchabong.jpeg" alt="">
                <p class="mota">Lẩu, là món ăn lỏng như canh kiểu Âu, được làm bằng nhiều nguyên liệu kết hợp với nhau như thịt, cá và rau, đậu, trái cây, nước hoặc các chất lỏng khác, có thêm gia vị, thường ăn vào đầu bữa cơm kiểu Âu như một món khai vị hay bữa điểm tâm.</p>
                <span class="thechia"></span>
                <span class="social">
                    <span><i class="fa fa-cutlery"></i> 17 món ăn</span>
                    <span><i class="fa fa-comments"></i> 11 bình luận</span>
                </span>
            </a>
        </div>
    </div>
</section>

<script type="text/javascript">
    $(".fooditem").hide();
    $(".gioithieu-vungmien").hide();

    $("#checkbox-taynguyen").click(function() {
        if($(this).is(":checked")) {
            $(".item-taynguyen").show(100);
        } else {
            $(".item-taynguyen").hide();
        }
    });

    $("#checkbox-mienbac").click(function() {
        if($(this).is(":checked")) {
            $(".item-mienbac").show(100);
        } else {
            $(".item-mienbac").hide();
        }
    });
 
    $("#checkbox-mientrung").click(function() {
        if($(this).is(":checked")) {
            $(".item-mientrung").show(100);
        } else {
            $(".item-mientrung").hide();
        }
    });

    $("#checkbox-miennam").click(function() {
        if($(this).is(":checked")) {
            $(".item-miennam").show(100);
        } else {
            $(".item-miennam").hide();
        }
    });
</script>

@endsection