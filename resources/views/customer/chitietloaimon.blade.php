@extends('customer.layouts.master')
@section('content')

<section id="loaimon" class="loaimon danhmucchitiet">
    <div class="container">
        <h3 class="text-success text-center">Danh sách loại món</h3>
        <div class="row list-group-item">
            <div class="col-sm-2 col-xs-6">
                <input type="checkbox" name="checkbox-sup" value="1" id="checkbox-sup">
                <label for="checkbox-sup">Súp</label>
            </div>
            <div class="col-sm-2 col-xs-6">
                <input type="checkbox" name="checkbox-lau" id="checkbox-lau">
                <label for="checkbox-lau">Lẩu</label>
            </div>
            <div class="col-sm-2 col-xs-6">
                <input type="checkbox" name="checkbox-banh" id="checkbox-banh">
                <label for="checkbox-banh">Bánh</label>
            </div>
            <div class="col-sm-2 col-xs-6">
                <input type="checkbox" name="checkbox-snack" id="checkbox-snack">
                <label for="checkbox-snack">Snack</label>
            </div>
            
        </div>

        <h3 class="text-success text-center" style="margin-top:3em;">Danh sách món ăn</h3>

        <div class="danhsachcon">
            <a href="#" class="fooditem col-sm-3 col-xs-12 item-snack">
                <h5 class="tieude">Súp hạt sen</h5>
                <img src="vendor_customer/assets/images/suphatsen.jpg" alt="">
                <p class="mota">Súp, là món ăn lỏng như canh kiểu Âu, được làm bằng nhiều nguyên liệu kết hợp với nhau như thịt, cá và rau, đậu, trái cây, nước hoặc các chất lỏng khác, có thêm gia vị, thường ăn vào đầu bữa cơm kiểu Âu như một món khai vị hay bữa điểm tâm.</p>
                <span class="thechia"></span>
                <span class="social">
                    <span><i class="fa fa-heart"></i> 17 yêu thích</span>
                    <span><i class="fa fa-comments"></i> 11 bình luận</span>
                </span>
            </a>

            <a href="#" class="fooditem col-sm-3 col-xs-12 item-sup">
                <h5 class="tieude">Mì vịt tiềm</h5>
                <img src="vendor_customer/assets/images/mivittiem.jpg" alt="">
                <p class="mota">Lẩu, là món ăn lỏng như canh kiểu Âu, được làm bằng nhiều nguyên liệu kết hợp với nhau như thịt, cá và rau, đậu, trái cây, nước hoặc các chất lỏng khác, có thêm gia vị, thường ăn vào đầu bữa cơm kiểu Âu như một món khai vị hay bữa điểm tâm. Lẩu, là món ăn lỏng như canh kiểu Âu, được làm bằng nhiều nguyên liệu kết hợp với nhau như thịt, cá và rau, đậu, trái cây, nước hoặc các chất lỏng khác, có thêm gia vị, thường ăn vào đầu bữa cơm kiểu Âu như một món khai vị hay bữa điểm tâm.</p>
                <span class="thechia"></span>
                <span class="social">
                    <span><i class="fa fa-heart"></i> 17 yêu thích</span>
                    <span><i class="fa fa-comments"></i> 11 bình luận</span>
                </span>
            </a>

            <a href="#" class="fooditem col-sm-3 col-xs-12 item-lau">
                <h5 class="tieude">Snack rong biển</h5>
                <img src="vendor_customer/assets/images/snack.jpg" alt="">
                <p class="mota">Lẩu, là món ăn lỏng như canh kiểu Âu, được làm bằng nhiều nguyên liệu kết hợp với nhau như thịt, cá và rau, đậu, trái cây, nước hoặc các chất lỏng khác, có thêm gia vị, thường ăn vào đầu bữa cơm kiểu Âu như một món khai vị hay bữa điểm tâm.</p>
                <span class="thechia"></span>
                <span class="social">
                    <span><i class="fa fa-heart"></i> 17 yêu thích</span>
                    <span><i class="fa fa-comments"></i> 11 bình luận</span>
                </span>
            </a>

            <a href="#" class="fooditem col-sm-3 col-xs-12 item-banh">
                <h5 class="tieude">Cơm cuộn chả bông</h5>
                <img src="vendor_customer/assets/images/comcuonchabong.jpeg" alt="">
                <p class="mota">Lẩu, là món ăn lỏng như canh kiểu Âu, được làm bằng nhiều nguyên liệu kết hợp với nhau như thịt, cá và rau, đậu, trái cây, nước hoặc các chất lỏng khác, có thêm gia vị, thường ăn vào đầu bữa cơm kiểu Âu như một món khai vị hay bữa điểm tâm.</p>
                <span class="thechia"></span>
                <span class="social">
                    <span><i class="fa fa-heart"></i> 17 yêu thích</span>
                    <span><i class="fa fa-comments"></i> 11 bình luận</span>
                </span>
            </a>

            <a href="#" class="fooditem col-sm-3 col-xs-12 item-snack">
                <h5 class="tieude">Súp hạt sen</h5>
                <img src="vendor_customer/assets/images/suphatsen.jpg" alt="">
                <p class="mota">Súp, là món ăn lỏng như canh kiểu Âu, được làm bằng nhiều nguyên liệu kết hợp với nhau như thịt, cá và rau, đậu, trái cây, nước hoặc các chất lỏng khác, có thêm gia vị, thường ăn vào đầu bữa cơm kiểu Âu như một món khai vị hay bữa điểm tâm.</p>
                <span class="thechia"></span>
                <span class="social">
                    <span><i class="fa fa-heart"></i> 17 yêu thích</span>
                    <span><i class="fa fa-comments"></i> 11 bình luận</span>
                </span>
            </a>

            <a href="#" class="fooditem col-sm-3 col-xs-12 item-sup">
                <h5 class="tieude">Mì vịt tiềm</h5>
                <img src="vendor_customer/assets/images/mivittiem.jpg" alt="">
                <p class="mota">Lẩu, là món ăn lỏng như canh kiểu Âu, được làm bằng nhiều nguyên liệu kết hợp với nhau như thịt, cá và rau, đậu, trái cây, nước hoặc các chất lỏng khác, có thêm gia vị, thường ăn vào đầu bữa cơm kiểu Âu như một món khai vị hay bữa điểm tâm. Lẩu, là món ăn lỏng như canh kiểu Âu, được làm bằng nhiều nguyên liệu kết hợp với nhau như thịt, cá và rau, đậu, trái cây, nước hoặc các chất lỏng khác, có thêm gia vị, thường ăn vào đầu bữa cơm kiểu Âu như một món khai vị hay bữa điểm tâm.</p>
                <span class="thechia"></span>
                <span class="social">
                    <span><i class="fa fa-heart"></i> 17 yêu thích</span>
                    <span><i class="fa fa-comments"></i> 11 bình luận</span>
                </span>
            </a>

            <a href="#" class="fooditem col-sm-3 col-xs-12 item-lau">
                <h5 class="tieude">Snack rong biển</h5>
                <img src="vendor_customer/assets/images/snack.jpg" alt="">
                <p class="mota">Lẩu, là món ăn lỏng như canh kiểu Âu, được làm bằng nhiều nguyên liệu kết hợp với nhau như thịt, cá và rau, đậu, trái cây, nước hoặc các chất lỏng khác, có thêm gia vị, thường ăn vào đầu bữa cơm kiểu Âu như một món khai vị hay bữa điểm tâm.</p>
                <span class="thechia"></span>
                <span class="social">
                    <span><i class="fa fa-heart"></i> 17 yêu thích</span>
                    <span><i class="fa fa-comments"></i> 11 bình luận</span>
                </span>
            </a>

            <a href="#" class="fooditem col-sm-3 col-xs-12 item-banh">
                <h5 class="tieude">Cơm cuộn chả bông</h5>
                <img src="vendor_customer/assets/images/comcuonchabong.jpeg" alt="">
                <p class="mota">Lẩu, là món ăn lỏng như canh kiểu Âu, được làm bằng nhiều nguyên liệu kết hợp với nhau như thịt, cá và rau, đậu, trái cây, nước hoặc các chất lỏng khác, có thêm gia vị, thường ăn vào đầu bữa cơm kiểu Âu như một món khai vị hay bữa điểm tâm.</p>
                <span class="thechia"></span>
                <span class="social">
                    <span><i class="fa fa-heart"></i> 17 yêu thích</span>
                    <span><i class="fa fa-comments"></i> 11 bình luận</span>
                </span>
            </a>
        </div>
    </div>
</section>

<script type="text/javascript">
    $(".fooditem").hide();

    $("#checkbox-snack").click(function() {
        if($(this).is(":checked")) {
            $(".item-snack").show(100);
        } else {
            $(".item-snack").hide();
        }
    });

    $("#checkbox-sup").click(function() {
        if($(this).is(":checked")) {
            $(".item-sup").show(100);
        } else {
            $(".item-sup").hide();
        }
    });
 
    $("#checkbox-lau").click(function() {
        if($(this).is(":checked")) {
            $(".item-lau").show(100);
        } else {
            $(".item-lau").hide();
        }
    });

    $("#checkbox-banh").click(function() {
        if($(this).is(":checked")) {
            $(".item-banh").show(100);
        } else {
            $(".item-banh").hide();
        }
    });
</script>

@endsection