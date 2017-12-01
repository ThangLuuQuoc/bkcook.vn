@extends('customer.layouts.master')
@section('content')

<section id="chitietmonan" class="chitietmonan">
	<div class="container">
		<div id='tongquan' class="row">
			<div id="anh" class="col-md-4">
				<img src="vendor_customer/assets/images/photuoi.jpg" class="img-responsive img-rounded" alt="Pho tuoi xao thit bo">
			</div>
			<div id="gioithieu" class="col-md-8">
				<div id="tag">
					<span id="tagnguyenlieu">Nguyên liệu: <a href="#">Bún - Mì - Nui</a></span>
              		<span id="tagmucdich">Mục đích: <a href="#">Ăn sáng</a></span>
				</div>
				<div id="tenmon"><h3>Cách làm phở tươi xào thịt bò</h3></div>
				<div id="vote" class="container">
					      <div class="star-rating">
					        <span class="fa fa-star-o" data-rating="1"></span>
					        <span class="fa fa-star-o" data-rating="2"></span>
					        <span class="fa fa-star-o" data-rating="3"></span>
					        <span class="fa fa-star-o" data-rating="4"></span>
					        <span class="fa fa-star-o" data-rating="5"></span>
					        <input type="hidden" name="whatever1" class="rating-value" value="4.1">
					        <span style="font-size: 14px;">4 Đánh giá</span>
					    </div>
				</div>
				<div id="mota">
					<p>Món phở đã quá quen thuộc với người Việt Nam và phở xào thịt bò không nằm ngoài danh sách những món ăn dễ làm mà dễ ăn của người Việt. Bạn có thể tự tay chuẩn bị một món ngon cho cả gia đình với cách làm phở xào thịt bò ngon không kém ngoài hàng chỉ với 30 phút chuẩn bị nguyên liệu và 15 phút chế biến thôi nhé. Rất nhanh lại đảm bảo sẽ có một món ăn rất ngon và hấp dẫn.</p>
				</div>
				<div id="tacgia">
					<img id="anhtacgia" src="vendor_customer/assets/images/thuyduyen.jpg" alt="Nguyen Thuy Duyen" class="img-circle">
					<div id='thongtintacgia'>
						<p id='tentacgia'><a href="#">Thuy Duyen</a></p>
						<p>
							<b>20</b> công thức
							<b>15</b> theo dõi
						</p>
					</div>
				</div>
				<div id="thongso">
					<div id="songuyenlieu">
						<p>Nguyên liệu</p>
						<b>10</b>
					</div>
					<div id="thoigian">
						<p>Thực hiện</p>
						<b>45m</b>
					</div>
					<div id="phan">
						<p>Phần</p>
						<b>02 người</b>
					</div>
					<div id="dokho">
						<p>Độ khó</p>
						<b>Dễ</b>
					</div>
				</div>
			</div>
		</div>
		<hr>

		<div id="nguyenlieu-baivietlienquan">
			<div id="nguyenlieu" class="col-md-8">
				<div id="nguyenlieuchung">
					<div id="tieude">
						<h5>Nguyên liệu</h5>
					</div>
				</div>
				<div id="chitiet">
					<ul>
						<li>Bánh phở <span>500gr</span></li>
						<li>Cải bó xôi <span>200gr</span></li>
						<li>Cà chua <span>2 trái</span></li>
						<li>Hạt nêm <span>Nửa muỗng cà phê</span></li>
						<li>Nước mắm <span>Nửa muỗng cà phê</span></li>
						<li>Thịt bò <span>300gr</span></li>
						<li>Hành tây <span>1 củ</span></li>
						<li>Tỏi <span>2 củ</span></li>
						<li>Tiêu <span>Nửa muỗng cà phê</span></li>
						<li>Dầu ăn <span>1 muỗng canh</span></li>
					</ul>
				</div>
			</div>
			<div id="baivietlienquan" class="col-md-4">
				<h5>Bài viết liên quan</h5>
				<div id="baiviet">
					<img src="vendor_customer/assets/images/ha4.jpg">
					<p><a href="#" data-toggle="modal" data-target="#yourModal">Phở tái, món ăn giàu dinh dưỡng</a></p>
				</div>
				<div id="baiviet">
					<img src="vendor_customer/assets/images/ha7.jpg">
					<p><a href="#" data-toggle="modal" data-target="#yourModal">Phở nạm gầu, khó nhưng rất dễ</a></p>
				</div>
				<div id="baiviet">
					<img src="vendor_customer/assets/images/buoc2.2.jpg">
					<p><a href="#" data-toggle="modal" data-target="#yourModal">Giai thoại phở Hà thành</a></p>
				</div>
				<div id="baiviet">
					<img src="vendor_customer/assets/images/ha11.jpg">
					<p><a href="#" data-toggle="modal" data-target="#yourModal">Dư âm những người Tràng An cuối cùng</a></p>
				</div>

			</div>

			<div class="modal fade" id="yourModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title" id="myModalLabel">Phở Lý Quốc Sư - Dư âm những người Tràng An cuối cùng</h4>
						</div>
						<div class="modal-body">

								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus dolorem exercitationem architecto sit, eos ex, magnam quas voluptatibus, ullam inventore officia molestias sed. Quas, alias temporibus laudantium est dicta error? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus dolorem exercitationem architecto sit, eos ex, magnam quas voluptatibus, ullam inventore officia molestias sed. Quas, alias temporibus laudantium est dicta error? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus dolorem exercitationem architecto sit, eos ex, magnam quas voluptatibus, ullam inventore officia molestias sed. Quas, alias temporibus laudantium est dicta error? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus dolorem exercitationem architecto sit, eos ex, magnam quas voluptatibus, ullam inventore officia molestias sed. Quas, alias temporibus laudantium est dicta error? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus dolorem exercitationem architecto sit, eos ex, magnam quas voluptatibus, ullam inventore officia molestias sed. Quas, alias temporibus laudantium est dicta error? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus dolorem exercitationem architecto sit, eos ex, magnam quas voluptatibus, ullam inventore officia molestias sed. Quas, alias temporibus laudantium est dicta error?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus dolorem exercitationem architecto sit, eos ex, magnam quas voluptatibus, ullam inventore officia molestias sed. Quas, alias temporibus laudantium est dicta error? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus dolorem exercitationem architecto sit, eos ex, magnam quas voluptatibus, ullam inventore officia molestias sed. Quas, alias temporibus laudantium est dicta error? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus dolorem exercitationem architecto sit, eos ex, magnam quas voluptatibus, ullam inventore officia molestias sed. Quas, alias temporibus laudantium est dicta error?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus dolorem exercitationem architecto sit, eos ex, magnam quas voluptatibus, ullam inventore officia molestias sed. Quas, alias temporibus laudantium est dicta error? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus dolorem exercitationem architecto sit, eos ex, magnam quas voluptatibus, ullam inventore officia molestias sed. Quas, alias temporibus laudantium est dicta error? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus dolorem exercitationem architecto sit, eos ex, magnam quas voluptatibus, ullam inventore officia molestias sed. Quas, alias temporibus laudantium est dicta error?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus dolorem exercitationem architecto sit, eos ex, magnam quas voluptatibus, ullam inventore officia molestias sed. Quas, alias temporibus laudantium est dicta error? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus dolorem exercitationem architecto sit, eos ex, magnam quas voluptatibus, ullam inventore officia molestias sed. Quas, alias temporibus laudantium est dicta error? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus dolorem exercitationem architecto sit, eos ex, magnam quas voluptatibus, ullam inventore officia molestias sed. Quas, alias temporibus laudantium est dicta error

						</div>
						<div class="modal-footer">
							<form class="">
								<input type="text" class="form-control" placeholder="Your comment">
								<button type="button" class="btn btn-primary">Comment</button>
								<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
							</form>

						</div>
					</div>
				</div>
			</div>

		</div>
		<hr>
		<div class="container" id="tab">
			<div class="row">
                <div class="col-md-12">
            		<div class="card">
			            <ul class="nav nav-tabs" role="tablist">
			                <li role="presentation" class="active">
			                	<a href="#congthuc" aria-controls="congthuc" role="tab" data-toggle="tab">Công thức</a>
			                </li>
			                <li role="presentation">
			                	<a href="#hinhanh" aria-controls="hinhanh" role="tab" data-toggle="tab">Hình ảnh</a>
			                </li>
			                <li role="presentation">
			                	<a href="#video" aria-controls="video" role="tab" data-toggle="tab">Video</a>
			                </li>
			            </ul>

	                    <!-- Tab panes -->
	                    <div class="tab-content">
	                        <div role="tabpanel" class="tab-pane active" id="congthuc">
								<h4>Bước 1.</h4>
								<p>Rau cải ngọt rửa sạch, để ráo nước, xắt nhỏ vừa ăn. Thịt bò rửa sạch, thái mỏng, ướp với chút hạt nêm, tiêu, dầu ăn, tỏi băm nhỏ chừng 20-30 phút cho ngấm.</p>
								<img id="buoc1-1" src="vendor_customer/assets/images/buoc1.1.jpg">
								<img id="buoc1-1" src="vendor_customer/assets/images/buoc1.2.jpg">
								<hr>
								<h4>Bước 2.</h4>
								<p>Cà chua gọt vỏ bổ cau, hành tây thái múi mỏng, tỏi băm nhỏ. Xé tơi từng sợi phở rồi bọc màng thực phẩm để trong ngăn mát trước khi xào khoảng 30 phút, cách này giúp phở xào rất tơi không bị bết dính.</p>
								<img id="buoc2-1" src="vendor_customer/assets/images/buoc2.1.jpg">
								<img id="buoc2-1" src="vendor_customer/assets/images/buoc2.2.jpg">
								<hr>
								<h4>Bước 3.</h4>
								<p>Phi thơm tỏi, cho thịt bò vào xào tái khoảng chừng 1 phút rồi để riêng thịt bò ra đĩa. Dùng chảo vừa xào thịt bò cho tiếp hành tây vào xào chừng 2-3 phút rồi cho cà chua vào xào cùng thêm 2-3 phút nữa. Trút thịt bò vào đảo đều khoảng 30 giây.</p>
								<img id="buoc3" src="vendor_customer/assets/images/buoc3.jpg">
								<hr>
								<h4>Bước 4.</h4>
								<p>Cho rau cải vào đảo đều chừng 1 phút, nêm nếm cho vừa ăn. Trút hỗn hợp rau và thịt bò lên trên phở, rưới nước xào ngấm đều phở hoặc nếu thích phở ngấm hơn thì bạn cho phở vào đảo cùng chừng 1 phút nữa thì tắt bếp.</p>
								<img id="buoc4-1" src="vendor_customer/assets/images/buoc4.1.jpg">
								<img id="buoc4-2" src="vendor_customer/assets/images/buoc4.2.jpg">
								<img id="buoc4-4" src="vendor_customer/assets/images/buoc4.4.jpg">
								<hr>
								<h4>Bước 5.</h4>
								<p>Dọn phở xào thịt bò ra đĩa ăn kèm nước tương hoặc tương ớt sẽ rất ngon.</p>
								<img id="buoc5-1" src="vendor_customer/assets/images/buoc5.1.jpg">
								<img id="buoc5-2" src="vendor_customer/assets/images/buoc5.2.jpg">
								<img id="buoc5-3" src="vendor_customer/assets/images/buoc5.3.jpg">
								<img id="buoc5-4" src="vendor_customer/assets/images/buoc5.4.jpg">
								<img id="buoc5-5" src="vendor_customer/assets/images/buoc5.5.jpg">
								<hr>

	                        </div>
	                        <div role="tabpanel" class="tab-pane" id="hinhanh">
	                        	<h4>Hình ảnh món ăn</h4><hr>
								<img src="vendor_customer/assets/images/ha1.jpg">
								<img src="vendor_customer/assets/images/ha2.jpg">
								<img src="vendor_customer/assets/images/ha3.jpg">
								<img src="vendor_customer/assets/images/ha4.jpg">
								<img src="vendor_customer/assets/images/ha5.jpg">
								<img src="vendor_customer/assets/images/ha6.jpg">
								<img src="vendor_customer/assets/images/ha7.jpg">
								<img src="vendor_customer/assets/images/ha8.jpg">
								<img src="vendor_customer/assets/images/ha9.jpg">
								<img src="vendor_customer/assets/images/ha10.jpg">
								<img src="vendor_customer/assets/images/ha11.jpg">
								<img src="vendor_customer/assets/images/ha12.jpg">
								<img src="vendor_customer/assets/images/ha13.jpg">
								<img src="vendor_customer/assets/images/ha14.jpg">
	                        </div>
	                        <div role="tabpanel" class="tab-pane" id="video">
	                        	<h4>Video món ăn</h4><hr>
	                        	<iframe width="560" height="315" src="https://www.youtube.com/embed/O9hTxcTbKOo" frameborder="0" allowfullscreen></iframe>
	                        </div>
	                    </div>	<!--End tab panel -->
					
					<!-- Comment -->
					<div class="detailBox container">
					    <div class="titleBox">
					      <label>Bình luận</label>
					        <button type="button" class="close" aria-hidden="true">&times;</button>
					    </div>
					    <div class="commentBox">
					        
					        <p class="taskDescription">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
					    </div>
					    <div class="actionBox">
					        <ul class="commentList">
					            <li>
					                <div class="commenterImage">
					                  <img src="http://via.placeholder.com/50x50" />
					                </div>
					                <div class="commentText">
					                    <p class="">Hello this is a test comment.</p> <span class="date sub-text">on March 5th, 2014</span>

					                </div>
					            </li>
					            <li>
					                <div class="commenterImage">
					                  <img src="http://placekitten.com/45/45" />
					                </div>
					                <div class="commentText">
					                    <p class="">Hello this is a test comment and this comment is particularly very long and it goes on and on and on.</p> <span class="date sub-text">on March 5th, 2014</span>

					                </div>
					            </li>
					            <li>
					                <div class="commenterImage">
					                  <img src="http://via.placeholder.com/50x50" />
					                </div>
					                <div class="commentText">
					                    <p class="">Hello this is a test comment.</p> <span class="date sub-text">on March 5th, 2014</span>

					                </div>
					            </li>
					        </ul>
					        <form class="form-inline" role="form">
					            <div class="form-group">
					                <input id="input-comment" class="form-control" type="text" placeholder="Your comments" />
					            </div>
					            <div class="form-group">
					                <button type="submit" class="btn btn-sm btn-primary" id="btn-comment">Add</button>
					            </div>
					        </form>
					    </div>
					</div>	<!-- End comment -->

					</div>
                </div>
			</div>
		</div>
	</div>
</section>

@endsection