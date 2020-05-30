<!DOCTYPE HTML>
<html>
	<!-- <div class="page-inner"> -->
    <?php include $_SERVER["DOCUMENT_ROOT"]."/frame/header.php"; ?>   
 

	<header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url(images/img_bg_2.jpg)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					

					<div class="row row-mt-15em">
						<div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
							<h1>Planing Trip To Anywhere in The World?</h1>	
						</div>
						<div class="col-md-4 col-md-push-1 animate-box" data-animate-effect="fadeInRight">
							<div class="form-wrap">
								<div class="tab">
									
									<div class="tab-content">
										<div class="tab-content-inner active" data-content="signup">
											<h3>회원가입</h3>
											<form action="/member/signup_2.php" method= "post">
												<div class="row form-group">
													<div class="col-md-12">
														<label for="userid">아이디를 입력해주세요</label>
														<input type="text" id="userid" name ="userid"  class="form-control">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="password">비밀번호를 입력해주세요</label>
														<input type="password" id="password" name = "password" class="form-control">
													</div>
                                                </div>
                                                <div class="row form-group">
													<div class="col-md-12">
														<label for="password">비밀번호를 다시 입력해주세요</label>
														<input type="password" id="password2" name = "password2" class="form-control">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="fullname">닉네임을 입력해주세요</label>
														<input type="text" id="fullname" name = "fullname" class="form-control">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="location">지역을 입력해주세요</label>
														<select name="location" id="location"  class="form-control">
															<option value="Activities">Activities</option>
															<option value="Hiking">Hiking</option>
															<option value="Caving">Caving</option>
															<option value="Swimming">Swimming</option>
														</select>
													</div>
												</div>

												<div class="row form-group">
													<div class="col-md-12">
														<input type="submit" class="btn btn-primary btn-block" value="Submit">
													</div>
												</div>
											</form>	
										</div>

										
									</div>
								</div>
							</div>
						</div>
					</div>
							
					
				</div>
			</div>
		</div>
	</header>
	
  
    <?php include $_SERVER["DOCUMENT_ROOT"]."/frame/footer.php"; ?>   


	</body>
</html>

