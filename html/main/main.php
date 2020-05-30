<!DOCTYPE HTML>

<html>
<?php include $_SERVER["DOCUMENT_ROOT"]."/frame/header_login.php"; ?>   
<?php include $_SERVER["DOCUMENT_ROOT"]."/login/db.php"; ?>      
<?php include $_SERVER["DOCUMENT_ROOT"]."/login/sessioncheck.php"; ?>      



	<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url(images/img_6.jpg)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-center">
					<div class="row row-mt-15em">

						<div class="col-md-12 mt-text animate-box" data-animate-effect="fadeInUp">
							<h1>스터디 구하기</h1>	
						</div>
						
					</div>
					
				</div>
			</div>
		</div>
    </header>

	

  <div id="board_area"> 
		<table class="list-table">
		<thead>
			<tr>
                    <th width="300"></th>
				    <th width="70">번호</th>
					<th width="500">제목</th>
					<th width="120">글쓴이</th>
					<th width="150">작성일</th>
					<th width="100">조회수</th>
				</tr>
		</thead>
		<?php
			// board테이블에서 idx를 기준으로 내림차순해서 5개까지 표시
			$sql = mq("select * from board order by idx desc limit 0,5"); 
				while($board = $sql->fetch_array())
				{
				//title변수에 DB에서 가져온 title을 선택
				$title=$board["title"]; 
				if(strlen($title)>30)
				{ 
					//title이 30을 넘어서면 ...표시
					$title=str_replace($board["title"],mb_substr($board["title"],0,30,"utf-8")."...",$board["title"]);
				}
		?>
		<tbody>
			<tr>
            <td width="300"></td>
			<td width="70"><?php echo $board['idx']; ?></td>
			<td width="500"><a href="/main/read.php?idx=<?php echo $board["idx"];?>"><?php echo $title;?></a></td>
			<td width="120"><?php echo $board['id']?></td>
			<td width="150"><?php echo $board['date']?></td>
			<td width="100"><?php echo $board['hit']; ?></td>
			</tr>
		</tbody>
		<?php } ?>
		</table>
		<div id="write_btn">
			<a href="/main/write.php"><button>글쓰기</button></a>
		</div>
	</div>


	
	




	<footer id="gtco-footer" role="contentinfo">
		<div class="gtco-container">
			<div class="row row-p	b-md">

				<div class="col-md-4">
					<div class="gtco-widget">
						<h3>About Us</h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore eos molestias quod sint ipsum possimus temporibus officia iste perspiciatis consectetur in fugiat repudiandae cum. Totam cupiditate nostrum ut neque ab?</p>
					</div>
				</div>

				<div class="col-md-2 col-md-push-1">
					<div class="gtco-widget">
						<h3>Destination</h3>
						<ul class="gtco-footer-links">
							<li><a href="#">Europe</a></li>
							<li><a href="#">Australia</a></li>
							<li><a href="#">Asia</a></li>
							<li><a href="#">Canada</a></li>
							<li><a href="#">Dubai</a></li>
						</ul>
					</div>
				</div>

				<div class="col-md-2 col-md-push-1">
					<div class="gtco-widget">
						<h3>Hotels</h3>
						<ul class="gtco-footer-links">
							<li><a href="#">Luxe Hotel</a></li>
							<li><a href="#">Italy 5 Star hotel</a></li>
							<li><a href="#">Dubai Hotel</a></li>
							<li><a href="#">Deluxe Hotel</a></li>
							<li><a href="#">BoraBora Hotel</a></li>
						</ul>
					</div>
				</div>

				<div class="col-md-3 col-md-push-1">
					<div class="gtco-widget">
						<h3>Get In Touch</h3>
						<ul class="gtco-quick-contact">
							<li><a href="#"><i class="icon-phone"></i> +1 234 567 890</a></li>
							<li><a href="#"><i class="icon-mail2"></i> info@freehtml5.co</a></li>
							<li><a href="#"><i class="icon-chat"></i> Live Chat</a></li>
						</ul>
					</div>
				</div>

			</div>

			<div class="row copyright">
				<div class="col-md-12">
					<p class="pull-left">
						<small class="block">&copy; 2016 Free HTML5. All Rights Reserved.</small> 
						<small class="block">Designed by <a href="https://freehtml5.co/" target="_blank">FreeHTML5.co</a> Demo Images: <a href="http://unsplash.com/" target="_blank">Unsplash</a></small>
					</p>
					<p class="pull-right">
						<ul class="gtco-social-icons pull-right">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>
	<!-- </div> -->

	</div>
    <?php include $_SERVER["DOCUMENT_ROOT"]."/footer.php"; ?>   


	</body>
</html>

