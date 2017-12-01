@extends('customer.layouts.master')
@section('content')

<section id="nhahang" class="nhahang danhmucchitiet">
    <div class="container">
        <h3 class="text-success text-center">Danh sách nhà hàng</h3>
        <div class="row list-group-item">
            <div class="col-sm-2 col-xs-6">
                <input type="radio" name="radio-nhahang" value="item-steak" id="radio-steak">
                <label for="radio-steak">Steak Restaurant</label>
            </div>
            <div class="col-sm-2 col-xs-6">
                <input type="radio" name="radio-nhahang" value="item-tokori" id="radio-tokori">
                <label for="radio-tokori">Tokori Restaurant</label>
            </div>
            <div class="col-sm-2 col-xs-6">
                <input type="radio" name="radio-nhahang" value="item-quanngon" id="radio-quanngon">
                <label for="radio-quanngon">Quán ngon</label>
            </div>
            <div class="col-sm-2 col-xs-6">
                <input type="radio" name="radio-nhahang" value="item-mealing" id="radio-mealing">
                <label for="radio-mealing">Mealing</label>
            </div>
        </div>

        <div class="item-steak gioithieu-nhahang">
            Steak với những đặc sản như ... chắc chắn sẽ làm hài lòng ngay cả với những ai khó tính nhất ...
        </div>

        <div class="item-tokori gioithieu-nhahang">
            Tokori Restaurant có hơn 20 năm như ...
        </div>

        <div class="item-quanngon gioithieu-nhahang">
            Quán ngon là 1 trong những ...
        </div>

        <div class="item-mealing gioithieu-nhahang">
           Mealing từ lâu đã khẳng định được chỗ đứng trong làng ẩm thực
        </div>

        <h3 class="text-success text-center" style="margin-top:3em;">Danh sách món ăn</h3>

        <div class="danhsachcon">
            <a href="#" class="fooditem col-sm-3 col-xs-12 item-mealing">
                <h5 class="tieude">Súp hạt sen</h5>
                <img src="vendor_customer/assets/images/suphatsen.jpg" alt="">
                <p class="mota">Súp, là món ăn lỏng như canh kiểu Âu, được làm bằng nhiều nguyên liệu kết hợp với nhau như thịt, cá và rau, đậu, trái cây, nước hoặc các chất lỏng khác, có thêm gia vị, thường ăn vào đầu bữa cơm kiểu Âu như một món khai vị hay bữa điểm tâm.</p>
                <span class="thechia"></span>
                <span class="social">
                    <span><i class="fa fa-cutlery"></i> 17 món ăn</span>
                    <span><i class="fa fa-comments"></i> 11 bình luận</span>
                </span>
            </a>

            <a href="#" class="fooditem col-sm-3 col-xs-12 item-steak">
                <h5 class="tieude">Mì vịt tiềm</h5>
                <img src="vendor_customer/assets/images/mivittiem.jpg" alt="">
                <p class="mota">Lẩu, là món ăn lỏng như canh kiểu Âu, được làm bằng nhiều nguyên liệu kết hợp với nhau như thịt, cá và rau, đậu, trái cây, nước hoặc các chất lỏng khác, có thêm gia vị, thường ăn vào đầu bữa cơm kiểu Âu như một món khai vị hay bữa điểm tâm. Lẩu, là món ăn lỏng như canh kiểu Âu, được làm bằng nhiều nguyên liệu kết hợp với nhau như thịt, cá và rau, đậu, trái cây, nước hoặc các chất lỏng khác, có thêm gia vị, thường ăn vào đầu bữa cơm kiểu Âu như một món khai vị hay bữa điểm tâm.</p>
                <span class="thechia"></span>
                <span class="social">
                    <span><i class="fa fa-cutlery"></i> 17 món ăn</span>
                    <span><i class="fa fa-comments"></i> 11 bình luận</span>
                </span>
            </a>

            <a href="#" class="fooditem col-sm-3 col-xs-12 item-tokori">
                <h5 class="tieude">mealing rong biển</h5>
                <img src="vendor_customer/assets/images/suphatsen.jpg" alt="">
                <p class="mota">Lẩu, là món ăn lỏng như canh kiểu Âu, được làm bằng nhiều nguyên liệu kết hợp với nhau như thịt, cá và rau, đậu, trái cây, nước hoặc các chất lỏng khác, có thêm gia vị, thường ăn vào đầu bữa cơm kiểu Âu như một món khai vị hay bữa điểm tâm.</p>
                <span class="thechia"></span>
                <span class="social">
                    <span><i class="fa fa-cutlery"></i> 17 món ăn</span>
                    <span><i class="fa fa-comments"></i> 11 bình luận</span>
                </span>
            </a>

            <a href="#" class="fooditem col-sm-3 col-xs-12 item-quanngon">
                <h5 class="tieude">Cơm cuộn chả bông</h5>
                <img src="vendor_customer/assets/images/comcuonchabong.jpeg" alt="">
                <p class="mota">Lẩu, là món ăn lỏng như canh kiểu Âu, được làm bằng nhiều nguyên liệu kết hợp với nhau như thịt, cá và rau, đậu, trái cây, nước hoặc các chất lỏng khác, có thêm gia vị, thường ăn vào đầu bữa cơm kiểu Âu như một món khai vị hay bữa điểm tâm.</p>
                <span class="thechia"></span>
                <span class="social">
                    <span><i class="fa fa-cutlery"></i> 17 món ăn</span>
                    <span><i class="fa fa-comments"></i> 11 bình luận</span>
                </span>
            </a>

            <a href="#" class="fooditem col-sm-3 col-xs-12 item-mealing">
                <h5 class="tieude">Súp hạt sen</h5>
                <img src="vendor_customer/assets/images/suphatsen.jpg" alt="">
                <p class="mota">Súp, là món ăn lỏng như canh kiểu Âu, được làm bằng nhiều nguyên liệu kết hợp với nhau như thịt, cá và rau, đậu, trái cây, nước hoặc các chất lỏng khác, có thêm gia vị, thường ăn vào đầu bữa cơm kiểu Âu như một món khai vị hay bữa điểm tâm.</p>
                <span class="thechia"></span>
                <span class="social">
                    <span><i class="fa fa-cutlery"></i> 17 món ăn</span>
                    <span><i class="fa fa-comments"></i> 11 bình luận</span>
                </span>
            </a>

            <a href="#" class="fooditem col-sm-3 col-xs-12 item-steak">
                <h5 class="tieude">Mì vịt tiềm</h5>
                <img src="vendor_customer/assets/images/mivittiem.jpg" alt="">
                <p class="mota">Lẩu, là món ăn lỏng như canh kiểu Âu, được làm bằng nhiều nguyên liệu kết hợp với nhau như thịt, cá và rau, đậu, trái cây, nước hoặc các chất lỏng khác, có thêm gia vị, thường ăn vào đầu bữa cơm kiểu Âu như một món khai vị hay bữa điểm tâm. Lẩu, là món ăn lỏng như canh kiểu Âu, được làm bằng nhiều nguyên liệu kết hợp với nhau như thịt, cá và rau, đậu, trái cây, nước hoặc các chất lỏng khác, có thêm gia vị, thường ăn vào đầu bữa cơm kiểu Âu như một món khai vị hay bữa điểm tâm.</p>
                <span class="thechia"></span>
                <span class="social">
                    <span><i class="fa fa-cutlery"></i> 17 món ăn</span>
                    <span><i class="fa fa-comments"></i> 11 bình luận</span>
                </span>
            </a>

            <a href="#" class="fooditem col-sm-3 col-xs-12 item-tokori">
                <h5 class="tieude">mealing rong biển</h5>
                <img src="vendor_customer/assets/images/suphatsen.jpg" alt="">
                <p class="mota">Lẩu, là món ăn lỏng như canh kiểu Âu, được làm bằng nhiều nguyên liệu kết hợp với nhau như thịt, cá và rau, đậu, trái cây, nước hoặc các chất lỏng khác, có thêm gia vị, thường ăn vào đầu bữa cơm kiểu Âu như một món khai vị hay bữa điểm tâm.</p>
                <span class="thechia"></span>
                <span class="social">
                    <span><i class="fa fa-cutlery"></i> 17 món ăn</span>
                    <span><i class="fa fa-comments"></i> 11 bình luận</span>
                </span>
            </a>

            <a href="#" class="fooditem col-sm-3 col-xs-12 item-quanngon">
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
     $(".gioithieu-nhahang").hide();

    // $("#radio-mealing").click(function() {
    //     if($(this).is(":checked")) {
    //         $(".item-mealing").show(100);
    //     } else {
    //         $(".item-mealing").hide();
    //     }
    // });

    // $("#radio-steak").click(function() {
    //     if($(this).is(":checked")) {
    //         $(".item-steak").show(100);
    //     } else {
    //         $(".item-steak").hide();
    //     }
    // });
 
    // $("#radio-tokori").click(function() {
    //     if($(this).is(":checked")) {
    //         $(".item-tokori").show(100);
    //     } else {
    //         $(".item-tokori").hide();
    //     }
    // });

    // $("#radio-quanngon").click(function() {
    //     if($(this).is(":checked")) {
    //         $(".item-quanngon").show(100);
    //     } else {
    //         $(".item-quanngon").hide();
    //     }
    // });

    $('.list-group-item input').on('change', function() {
        $(".fooditem").hide();
        $(".gioithieu-nhahang").hide();
       var nhaHang = $('input[name=radio-nhahang]:checked', '.list-group-item').val();
       var x = document.getElementsByClassName(nhaHang);
       console.log(x);
       for(var i=0; i<x.length; i++){
            x[i].style.display = 'block';
       }
    });
</script>

@endsection