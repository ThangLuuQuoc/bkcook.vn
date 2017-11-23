@extends('customer.layouts.master')
@section('content')

<section id="mucdich" class="mucdich danhmucchitiet">
    <div class="container">
        <h3 class="text-success text-center">Danh sách mục đích</h3>
        <div class="row list-group-item">
            <div class="col-sm-2 col-xs-6">
                <input type="checkbox" name="checkbox-giamcan" value="1" id="checkbox-giamcan">
                <label for="checkbox-giamcan">Giảm cân</label>
            </div>
            <div class="col-sm-2 col-xs-6">
                <input type="checkbox" name="checkbox-lamdep" id="checkbox-lamdep">
                <label for="checkbox-lamdep">Làm đẹp</label>
            </div>
            <div class="col-sm-2 col-xs-6">
                <input type="checkbox" name="checkbox-sinhnhat" id="checkbox-sinhnhat">
                <label for="checkbox-sinhnhat">Sinh nhật</label>
            </div>
            <div class="col-sm-2 col-xs-6">
                <input type="checkbox" name="checkbox-lienhoan" id="checkbox-lienhoan">
                <label for="checkbox-lienhoan">Liên hoan</label>
            </div>
            
        </div>

        <h3 class="text-success text-center" style="margin-top:3em;">Danh sách món ăn</h3>

        <div class="danhsachcon">
            <a href="#" class="fooditem col-sm-3 col-xs-12 item-lienhoan">
                <h5 class="tieude">Súp hạt sen</h5>
                <img src="vendor_customer/assets/images/suphatsen.jpg" alt="">
                <p class="mota">Súp, là món ăn lỏng như canh kiểu Âu, được làm bằng nhiều nguyên liệu kết hợp với nhau như thịt, cá và rau, đậu, trái cây, nước hoặc các chất lỏng khác, có thêm gia vị, thường ăn vào đầu bữa cơm kiểu Âu như một món khai vị hay bữa điểm tâm.</p>
                <span class="thechia"></span>
                <span class="social">
                    <span><i class="fa fa-heart"></i> 17 yêu thích</span>
                    <span><i class="fa fa-comments"></i> 11 bình luận</span>
                </span>
            </a>

            <a href="#" class="fooditem col-sm-3 col-xs-12 item-giamcan">
                <h5 class="tieude">Mì vịt tiềm</h5>
                <img src="vendor_customer/assets/images/mivittiem.jpg" alt="">
                <p class="mota">Lẩu, là món ăn lỏng như canh kiểu Âu, được làm bằng nhiều nguyên liệu kết hợp với nhau như thịt, cá và rau, đậu, trái cây, nước hoặc các chất lỏng khác, có thêm gia vị, thường ăn vào đầu bữa cơm kiểu Âu như một món khai vị hay bữa điểm tâm. Lẩu, là món ăn lỏng như canh kiểu Âu, được làm bằng nhiều nguyên liệu kết hợp với nhau như thịt, cá và rau, đậu, trái cây, nước hoặc các chất lỏng khác, có thêm gia vị, thường ăn vào đầu bữa cơm kiểu Âu như một món khai vị hay bữa điểm tâm.</p>
                <span class="thechia"></span>
                <span class="social">
                    <span><i class="fa fa-heart"></i> 17 yêu thích</span>
                    <span><i class="fa fa-comments"></i> 11 bình luận</span>
                </span>
            </a>

            <a href="#" class="fooditem col-sm-3 col-xs-12 item-lamdep">
                <h5 class="tieude">lienhoan rong biển</h5>
                <img src="vendor_customer/assets/images/lienhoan.jpg" alt="">
                <p class="mota">Lẩu, là món ăn lỏng như canh kiểu Âu, được làm bằng nhiều nguyên liệu kết hợp với nhau như thịt, cá và rau, đậu, trái cây, nước hoặc các chất lỏng khác, có thêm gia vị, thường ăn vào đầu bữa cơm kiểu Âu như một món khai vị hay bữa điểm tâm.</p>
                <span class="thechia"></span>
                <span class="social">
                    <span><i class="fa fa-heart"></i> 17 yêu thích</span>
                    <span><i class="fa fa-comments"></i> 11 bình luận</span>
                </span>
            </a>

            <a href="#" class="fooditem col-sm-3 col-xs-12 item-sinhnhat">
                <h5 class="tieude">Cơm cuộn chả bông</h5>
                <img src="vendor_customer/assets/images/comcuonchabong.jpeg" alt="">
                <p class="mota">Lẩu, là món ăn lỏng như canh kiểu Âu, được làm bằng nhiều nguyên liệu kết hợp với nhau như thịt, cá và rau, đậu, trái cây, nước hoặc các chất lỏng khác, có thêm gia vị, thường ăn vào đầu bữa cơm kiểu Âu như một món khai vị hay bữa điểm tâm.</p>
                <span class="thechia"></span>
                <span class="social">
                    <span><i class="fa fa-heart"></i> 17 yêu thích</span>
                    <span><i class="fa fa-comments"></i> 11 bình luận</span>
                </span>
            </a>

            <a href="#" class="fooditem col-sm-3 col-xs-12 item-lienhoan">
                <h5 class="tieude">Súp hạt sen</h5>
                <img src="vendor_customer/assets/images/giamcanhatsen.jpg" alt="">
                <p class="mota">Súp, là món ăn lỏng như canh kiểu Âu, được làm bằng nhiều nguyên liệu kết hợp với nhau như thịt, cá và rau, đậu, trái cây, nước hoặc các chất lỏng khác, có thêm gia vị, thường ăn vào đầu bữa cơm kiểu Âu như một món khai vị hay bữa điểm tâm.</p>
                <span class="thechia"></span>
                <span class="social">
                    <span><i class="fa fa-heart"></i> 17 yêu thích</span>
                    <span><i class="fa fa-comments"></i> 11 bình luận</span>
                </span>
            </a>

            <a href="#" class="fooditem col-sm-3 col-xs-12 item-giamcan">
                <h5 class="tieude">Mì vịt tiềm</h5>
                <img src="vendor_customer/assets/images/mivittiem.jpg" alt="">
                <p class="mota">Lẩu, là món ăn lỏng như canh kiểu Âu, được làm bằng nhiều nguyên liệu kết hợp với nhau như thịt, cá và rau, đậu, trái cây, nước hoặc các chất lỏng khác, có thêm gia vị, thường ăn vào đầu bữa cơm kiểu Âu như một món khai vị hay bữa điểm tâm. Lẩu, là món ăn lỏng như canh kiểu Âu, được làm bằng nhiều nguyên liệu kết hợp với nhau như thịt, cá và rau, đậu, trái cây, nước hoặc các chất lỏng khác, có thêm gia vị, thường ăn vào đầu bữa cơm kiểu Âu như một món khai vị hay bữa điểm tâm.</p>
                <span class="thechia"></span>
                <span class="social">
                    <span><i class="fa fa-heart"></i> 17 yêu thích</span>
                    <span><i class="fa fa-comments"></i> 11 bình luận</span>
                </span>
            </a>

            <a href="#" class="fooditem col-sm-3 col-xs-12 item-lamdep">
                <h5 class="tieude">lienhoan rong biển</h5>
                <img src="vendor_customer/assets/images/lienhoan.jpg" alt="">
                <p class="mota">Lẩu, là món ăn lỏng như canh kiểu Âu, được làm bằng nhiều nguyên liệu kết hợp với nhau như thịt, cá và rau, đậu, trái cây, nước hoặc các chất lỏng khác, có thêm gia vị, thường ăn vào đầu bữa cơm kiểu Âu như một món khai vị hay bữa điểm tâm.</p>
                <span class="thechia"></span>
                <span class="social">
                    <span><i class="fa fa-heart"></i> 17 yêu thích</span>
                    <span><i class="fa fa-comments"></i> 11 bình luận</span>
                </span>
            </a>

            <a href="#" class="fooditem col-sm-3 col-xs-12 item-sinhnhat">
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

    $("#checkbox-lienhoan").click(function() {
        if($(this).is(":checked")) {
            $(".item-lienhoan").show(100);
        } else {
            $(".item-lienhoan").hide();
        }
    });

    $("#checkbox-giamcan").click(function() {
        if($(this).is(":checked")) {
            $(".item-giamcan").show(100);
        } else {
            $(".item-giamcan").hide();
        }
    });
 
    $("#checkbox-lamdep").click(function() {
        if($(this).is(":checked")) {
            $(".item-lamdep").show(100);
        } else {
            $(".item-lamdep").hide();
        }
    });

    $("#checkbox-sinhnhat").click(function() {
        if($(this).is(":checked")) {
            $(".item-sinhnhat").show(100);
        } else {
            $(".item-sinhnhat").hide();
        }
    });
</script>

@endsection