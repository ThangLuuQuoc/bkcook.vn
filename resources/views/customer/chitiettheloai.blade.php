@extends('customer.layouts.master')
@section('content')

<section id="theloai" class="theloai danhmucchitiet">
    <div class="container">
        <h3 class="text-success text-center">Danh sách thể loại</h3>
        <div class="row list-group-item">
            <div class="col-sm-2 col-xs-6">
                <input type="checkbox" name="checkbox-khaivi" value="1" id="checkbox-khaivi">
                <label for="checkbox-khaivi">Khai vị</label>
            </div>
            <div class="col-sm-2 col-xs-6">
                <input type="checkbox" name="checkbox-trangmieng" id="checkbox-trangmieng">
                <label for="checkbox-trangmieng">Tráng miệng</label>
            </div>
            <div class="col-sm-2 col-xs-6">
                <input type="checkbox" name="checkbox-monchinh" id="checkbox-monchinh">
                <label for="checkbox-monchinh">Món chính</label>
            </div>
            <div class="col-sm-2 col-xs-6">
                <input type="checkbox" name="checkbox-monchay" id="checkbox-monchay">
                <label for="checkbox-monchay">Món chay</label>
            </div>
            
        </div>

        <h3 class="text-success text-center" style="margin-top:3em;">Danh sách món ăn</h3>

        <div class="danhsachcon">
            <a href="#" class="fooditem col-sm-3 col-xs-12 item-monchay">
                <h5 class="tieude">Súp hạt sen</h5>
                <img src="vendor_customer/assets/images/suphatsen.jpg" alt="">
                <p class="mota">Súp, là món ăn lỏng như canh kiểu Âu, được làm bằng nhiều nguyên liệu kết hợp với nhau như thịt, cá và rau, đậu, trái cây, nước hoặc các chất lỏng khác, có thêm gia vị, thường ăn vào đầu bữa cơm kiểu Âu như một món khai vị hay bữa điểm tâm.</p>
                <span class="thechia"></span>
                <span class="social">
                    <span><i class="fa fa-heart"></i> 17 yêu thích</span>
                    <span><i class="fa fa-comments"></i> 11 bình luận</span>
                </span>
            </a>

            <a href="#" class="fooditem col-sm-3 col-xs-12 item-khaivi">
                <h5 class="tieude">Mì vịt tiềm</h5>
                <img src="vendor_customer/assets/images/mivittiem.jpg" alt="">
                <p class="mota">Lẩu, là món ăn lỏng như canh kiểu Âu, được làm bằng nhiều nguyên liệu kết hợp với nhau như thịt, cá và rau, đậu, trái cây, nước hoặc các chất lỏng khác, có thêm gia vị, thường ăn vào đầu bữa cơm kiểu Âu như một món khai vị hay bữa điểm tâm. Lẩu, là món ăn lỏng như canh kiểu Âu, được làm bằng nhiều nguyên liệu kết hợp với nhau như thịt, cá và rau, đậu, trái cây, nước hoặc các chất lỏng khác, có thêm gia vị, thường ăn vào đầu bữa cơm kiểu Âu như một món khai vị hay bữa điểm tâm.</p>
                <span class="thechia"></span>
                <span class="social">
                    <span><i class="fa fa-heart"></i> 17 yêu thích</span>
                    <span><i class="fa fa-comments"></i> 11 bình luận</span>
                </span>
            </a>

            <a href="#" class="fooditem col-sm-3 col-xs-12 item-trangmieng">
                <h5 class="tieude">Snack rong biển</h5>
                <img src="vendor_customer/assets/images/snack.jpg" alt="">
                <p class="mota">Lẩu, là món ăn lỏng như canh kiểu Âu, được làm bằng nhiều nguyên liệu kết hợp với nhau như thịt, cá và rau, đậu, trái cây, nước hoặc các chất lỏng khác, có thêm gia vị, thường ăn vào đầu bữa cơm kiểu Âu như một món khai vị hay bữa điểm tâm.</p>
                <span class="thechia"></span>
                <span class="social">
                    <span><i class="fa fa-heart"></i> 17 yêu thích</span>
                    <span><i class="fa fa-comments"></i> 11 bình luận</span>
                </span>
            </a>

            <a href="#" class="fooditem col-sm-3 col-xs-12 item-monchinh">
                <h5 class="tieude">Cơm cuộn chả bông</h5>
                <img src="vendor_customer/assets/images/comcuonchabong.jpeg" alt="">
                <p class="mota">Lẩu, là món ăn lỏng như canh kiểu Âu, được làm bằng nhiều nguyên liệu kết hợp với nhau như thịt, cá và rau, đậu, trái cây, nước hoặc các chất lỏng khác, có thêm gia vị, thường ăn vào đầu bữa cơm kiểu Âu như một món khai vị hay bữa điểm tâm.</p>
                <span class="thechia"></span>
                <span class="social">
                    <span><i class="fa fa-heart"></i> 17 yêu thích</span>
                    <span><i class="fa fa-comments"></i> 11 bình luận</span>
                </span>
            </a>

            <a href="#" class="fooditem col-sm-3 col-xs-12 item-monchay">
                <h5 class="tieude">Súp hạt sen</h5>
                <img src="vendor_customer/assets/images/suphatsen.jpg" alt="">
                <p class="mota">Súp, là món ăn lỏng như canh kiểu Âu, được làm bằng nhiều nguyên liệu kết hợp với nhau như thịt, cá và rau, đậu, trái cây, nước hoặc các chất lỏng khác, có thêm gia vị, thường ăn vào đầu bữa cơm kiểu Âu như một món khai vị hay bữa điểm tâm.</p>
                <span class="thechia"></span>
                <span class="social">
                    <span><i class="fa fa-heart"></i> 17 yêu thích</span>
                    <span><i class="fa fa-comments"></i> 11 bình luận</span>
                </span>
            </a>

            <a href="#" class="fooditem col-sm-3 col-xs-12 item-khaivi">
                <h5 class="tieude">Mì vịt tiềm</h5>
                <img src="vendor_customer/assets/images/mivittiem.jpg" alt="">
                <p class="mota">Lẩu, là món ăn lỏng như canh kiểu Âu, được làm bằng nhiều nguyên liệu kết hợp với nhau như thịt, cá và rau, đậu, trái cây, nước hoặc các chất lỏng khác, có thêm gia vị, thường ăn vào đầu bữa cơm kiểu Âu như một món khai vị hay bữa điểm tâm. Lẩu, là món ăn lỏng như canh kiểu Âu, được làm bằng nhiều nguyên liệu kết hợp với nhau như thịt, cá và rau, đậu, trái cây, nước hoặc các chất lỏng khác, có thêm gia vị, thường ăn vào đầu bữa cơm kiểu Âu như một món khai vị hay bữa điểm tâm.</p>
                <span class="thechia"></span>
                <span class="social">
                    <span><i class="fa fa-heart"></i> 17 yêu thích</span>
                    <span><i class="fa fa-comments"></i> 11 bình luận</span>
                </span>
            </a>

            <a href="#" class="fooditem col-sm-3 col-xs-12 item-trangmieng">
                <h5 class="tieude">Snack rong biển</h5>
                <img src="vendor_customer/assets/images/snack.jpg" alt="">
                <p class="mota">Lẩu, là món ăn lỏng như canh kiểu Âu, được làm bằng nhiều nguyên liệu kết hợp với nhau như thịt, cá và rau, đậu, trái cây, nước hoặc các chất lỏng khác, có thêm gia vị, thường ăn vào đầu bữa cơm kiểu Âu như một món khai vị hay bữa điểm tâm.</p>
                <span class="thechia"></span>
                <span class="social">
                    <span><i class="fa fa-heart"></i> 17 yêu thích</span>
                    <span><i class="fa fa-comments"></i> 11 bình luận</span>
                </span>
            </a>

            <a href="#" class="fooditem col-sm-3 col-xs-12 item-monchinh">
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

    $("#checkbox-monchay").click(function() {
        if($(this).is(":checked")) {
            $(".item-monchay").show(100);
        } else {
            $(".item-monchay").hide();
        }
    });

    $("#checkbox-khaivi").click(function() {
        if($(this).is(":checked")) {
            $(".item-khaivi").show(100);
        } else {
            $(".item-khaivi").hide();
        }
    });
 
    $("#checkbox-trangmieng").click(function() {
        if($(this).is(":checked")) {
            $(".item-trangmieng").show(100);
        } else {
            $(".item-trangmieng").hide();
        }
    });

    $("#checkbox-monchinh").click(function() {
        if($(this).is(":checked")) {
            $(".item-monchinh").show(100);
        } else {
            $(".item-monchinh").hide();
        }
    });
</script>

@endsection