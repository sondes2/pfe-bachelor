@extends('home') @section('subheader')
<!-- BEGIN: Subheader -->
<div class="m-subheader ">
    <div class="d-flex align-items-center">
        <div class="mr-auto">
            <h3 class="m-subheader__title ">Leaderboard</h3>
        </div>
    </div>
</div>
<!-- END: Subheader -->
@endsection @section('content')
<div class="m-content">
    <div class="row">
        <div class="col-md-12">

            <!--begin::Portlet-->
            <div class="m-portlet m-portlet--tab">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <span class="m-portlet__head-icon m--hide">
                      <i class="la la-gear"></i>
                    </span>
                            <h3 class="m-portlet__head-text">
                      Fitness Points Top 100

                    </h3>
                        </div>
                    </div>
                    <div class="m-portlet__head-tools">
                        <ul class="m-portlet__nav">
                            <li class="m-portlet__nav-item">
                                <a href="#" class="btn btn-accent m-btn  m-btn--pill   btn-outline-info">
                                    <span>


													<span>Overall</span>
                                    </span>
                                </a>
                            </li>
                            <li class="m-portlet__nav-item">
                                <a href="#" class="btn btn-accent m-btn  m-btn--pill   btn btn-outline-info">
                                    <span>

													<span>This month</span>
                                    </span>
                                </a>
                            </li>
                            <li class="m-portlet__nav-item"></li>
                            <li class="m-portlet__nav-item">
                                <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
                                    <a href="#" class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
                                        <i class="la la-ellipsis-h m--font-brand"></i>
                                    </a>
                                    <div class="m-dropdown__wrapper">
                                        <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                        <div class="m-dropdown__inner">
                                            <div class="m-dropdown__body">
                                                <div class="m-dropdown__content">
                                                    <ul class="m-nav">
                                                        <li class="m-nav__section m-nav__section--first">
                                                            <span class="m-nav__section-text">Quick Actions</span>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-share"></i>
                                                                <span class="m-nav__link-text">Create Post</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                <span class="m-nav__link-text">Send Messages</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-multimedia-2"></i>
                                                                <span class="m-nav__link-text">Upload File</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__section">
                                                            <span class="m-nav__section-text">Useful Links</span>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-info"></i>
                                                                <span class="m-nav__link-text">FAQ</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                                <span class="m-nav__link-text">Support</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__separator m-nav__separator--fit m--hide">
                                                        </li>
                                                        <li class="m-nav__item m--hide">
                                                            <a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">Submit</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>
                <table id="leaderboards_table" style="position: relative; width: 100%; border-spacing: 0;">
		<tbody><tr id="tabltop" style="vertical-align: bottom;">
			<td style="padding: 42px 0px 12px 52px;"><b>Rank</b></td>
			<td></td>
			<td><b>Username</b></td>
			<td><b>Fitness Points</b></td>
			<td><b>Kcal</b></td>
			<td><b>Minutes</b></td>
			<td><b>Country</b></td>
		</tr>
					<tr style="background-color:#f7f7f7;">
				<td class="l">1.</td>
				<td class="l_pic">
					<a href="/user/fgfitness-online-coach">
						<div class="profile_circle_s">
							<img src="https://static.virtuagym.com/v29522/thumb/userpic/s/f9d23d1eabcf8101189b0df9b52040eec74f.jpg" width="38" height="38">
						</div>
					</a>
				</td>
				<td class="l_p_link">
					<a href="/user/fgfitness-online-coach">
						FGFitness Online Coach
						<img src="https://static.virtuagym.com/v29521498/images/gender-m.png">
					</a>
				</td>
				<td>176,000</td>
				<td>238,046</td>
				<td>27,634</td>
				<td class="r">
											<a href="/search/user?country=gb"><img class="leaderboard_flags" src="https://static.virtuagym.com/v29521498/images/flags/gb.png"></a>
									</td>
			</tr>
								<tr>
				<td class="l">2.</td>
				<td class="l_pic">
					<a href="/user/jacobbeekman">
						<div class="profile_circle_s">
							<img src="https://static.virtuagym.com/v29522/thumb/userpic/s/ab50f154c12fedf44995fb983ec4f1861c4d.jpg" width="38" height="38">
						</div>
					</a>
				</td>
				<td class="l_p_link">
					<a href="/user/jacobbeekman">
						Jacob
						<img src="https://static.virtuagym.com/v29521498/images/gender-m.png">
					</a>
				</td>
				<td>175,200</td>
				<td>215,258</td>
				<td>19,793</td>
				<td class="r">
											<a href="/search/user?country=nl"><img class="leaderboard_flags" src="https://static.virtuagym.com/v29521498/images/flags/nl.png"></a>
									</td>
			</tr>
								<tr style="background-color:#f7f7f7;">
				<td class="l">3.</td>
				<td class="l_pic">
					<a href="/user/lynn-mcf">
						<div class="profile_circle_s">
							<img src="https://static.virtuagym.com/v29522/thumb/userpic/s/db8e198b229e370f8348918d64688de87c56.jpg" width="38" height="38">
						</div>
					</a>
				</td>
				<td class="l_p_link">
					<a href="/user/lynn-mcf">
						Lynn McF
						<img src="https://static.virtuagym.com/v29521498/images/gender-f.png">
					</a>
				</td>
				<td>168,218</td>
				<td>171,904</td>
				<td>74,863</td>
				<td class="r">
											<a href="/search/user?country=gb"><img class="leaderboard_flags" src="https://static.virtuagym.com/v29521498/images/flags/gb.png"></a>
									</td>
			</tr>
								<tr>
				<td class="l">4.</td>
				<td class="l_pic">
					<a href="/user/teichmann-michel">
						<div class="profile_circle_s">
							<img src="https://static.virtuagym.com/v29522/thumb/userpic/s/6174b16608b44b0c01bffb0f13792a1dae77.jpg" width="38" height="38">
						</div>
					</a>
				</td>
				<td class="l_p_link">
					<a href="/user/teichmann-michel">
						Cello Teichmann
						<img src="https://static.virtuagym.com/v29521498/images/gender-m.png">
					</a>
				</td>
				<td>147,415</td>
				<td>124,776</td>
				<td>18,032</td>
				<td class="r">
											<a href="/search/user?country=de"><img class="leaderboard_flags" src="https://static.virtuagym.com/v29521498/images/flags/de.png"></a>
									</td>
			</tr>
								<tr style="background-color:#f7f7f7;">
				<td class="l">5.</td>
				<td class="l_pic">
					<a href="/user/cecilemosbeux0">
						<div class="profile_circle_s">
							<img src="https://static.virtuagym.com/v29522/thumb/userpic/s//images/default-profile-picture-female.jpg" width="38" height="38">
						</div>
					</a>
				</td>
				<td class="l_p_link">
					<a href="/user/cecilemosbeux0">
						cecilemosbeux0
						<img src="https://static.virtuagym.com/v29521498/images/gender-f.png">
					</a>
				</td>
				<td>136,800</td>
				<td>83,701</td>
				<td>14,337</td>
				<td class="r">
											<a href="/search/user?country=be"><img class="leaderboard_flags" src="https://static.virtuagym.com/v29521498/images/flags/be.png"></a>
									</td>
			</tr>
								<tr>
				<td class="l">6.</td>
				<td class="l_pic">
					<a href="/user/asstrid">
						<div class="profile_circle_s">
							<img src="https://static.virtuagym.com/v29522/thumb/userpic/s/d4e8e6c4455cca9426a8802909b307c94975.jpg" width="38" height="38">
						</div>
					</a>
				</td>
				<td class="l_p_link">
					<a href="/user/asstrid">
						Astrid Verhoeven
						<img src="https://static.virtuagym.com/v29521498/images/gender-f.png">
					</a>
				</td>
				<td>134,230</td>
				<td>236,321</td>
				<td>18,432</td>
				<td class="r">
											<a href="/search/user?country=be"><img class="leaderboard_flags" src="https://static.virtuagym.com/v29521498/images/flags/be.png"></a>
									</td>
			</tr>
								<tr style="background-color:#f7f7f7;">
				<td class="l">7.</td>
				<td class="l_pic">
					<a href="/user/rudydegraeve1">
						<div class="profile_circle_s">
							<img src="https://static.virtuagym.com/v29522/thumb/userpic/s/14ecc7935d7410c9fff74e0244687cb99da4.png" width="38" height="38">
						</div>
					</a>
				</td>
				<td class="l_p_link">
					<a href="/user/rudydegraeve1">
						Rudy De Graeve
						<img src="https://static.virtuagym.com/v29521498/images/gender-m.png">
					</a>
				</td>
				<td>121,573</td>
				<td>118,974</td>
				<td>15,741</td>
				<td class="r">
											<a href="/search/user?country=be"><img class="leaderboard_flags" src="https://static.virtuagym.com/v29521498/images/flags/be.png"></a>
									</td>
			</tr>
								<tr>
				<td class="l">8.</td>
				<td class="l_pic">
					<a href="/user/borrie1973">
						<div class="profile_circle_s">
							<img src="https://static.virtuagym.com/v29522/thumb/userpic/s/4fd615b7201f3d2dcbadbf83bffbb3318b19.jpg" width="38" height="38">
						</div>
					</a>
				</td>
				<td class="l_p_link">
					<a href="/user/borrie1973">
						Martijn de Wolf
						<img src="https://static.virtuagym.com/v29521498/images/gender-m.png">
					</a>
				</td>
				<td>121,497</td>
				<td>238,483</td>
				<td>30,433</td>
				<td class="r">
											<a href="/search/user?country=nl"><img class="leaderboard_flags" src="https://static.virtuagym.com/v29521498/images/flags/nl.png"></a>
									</td>
			</tr>
								<tr style="background-color:#f7f7f7;">
				<td class="l">9.</td>
				<td class="l_pic">
					<a href="/user/npollard">
						<div class="profile_circle_s">
							<img src="https://static.virtuagym.com/v29522/thumb/userpic/s//images/default-profile-picture-female.jpg" width="38" height="38">
						</div>
					</a>
				</td>
				<td class="l_p_link">
					<a href="/user/npollard">
						Nicola Pollard
						<img src="https://static.virtuagym.com/v29521498/images/gender-f.png">
					</a>
				</td>
				<td>120,255</td>
				<td>156,928</td>
				<td>20,892</td>
				<td class="r">
											<a href="/search/user?country=gb"><img class="leaderboard_flags" src="https://static.virtuagym.com/v29521498/images/flags/gb.png"></a>
									</td>
			</tr>
								<tr>
				<td class="l">10.</td>
				<td class="l_pic">
					<a href="/user/battybrierley">
						<div class="profile_circle_s">
							<img src="https://static.virtuagym.com/v29522/thumb/userpic/s/351cb325c900201dcc207278bab5a33090be.jpg" width="38" height="38">
						</div>
					</a>
				</td>
				<td class="l_p_link">
					<a href="/user/battybrierley">
						Sara Brierley
						<img src="https://static.virtuagym.com/v29521498/images/gender-f.png">
					</a>
				</td>
				<td>117,992</td>
				<td>142,812</td>
				<td>35,848</td>
				<td class="r">
											<a href="/search/user?country=gb"><img class="leaderboard_flags" src="https://static.virtuagym.com/v29521498/images/flags/gb.png"></a>
									</td>
			</tr>
								<tr style="background-color:#f7f7f7;">
				<td class="l">11.</td>
				<td class="l_pic">
					<a href="/user/ramonsiljade">
						<div class="profile_circle_s">
							<img src="https://static.virtuagym.com/v29522/thumb/userpic/s/b073c902ebb5a6803fe8484652af1453da8b.jpg" width="38" height="38">
						</div>
					</a>
				</td>
				<td class="l_p_link">
					<a href="/user/ramonsiljade">
						ramon.siljade
						<img src="https://static.virtuagym.com/v29521498/images/gender-m.png">
					</a>
				</td>
				<td>116,336</td>
				<td>257,042</td>
				<td>21,555</td>
				<td class="r">
											<a href="/search/user?country=nl"><img class="leaderboard_flags" src="https://static.virtuagym.com/v29521498/images/flags/nl.png"></a>
									</td>
			</tr>
								<tr>
				<td class="l">12.</td>
				<td class="l_pic">
					<a href="/user/fbiofilial-santos">
						<div class="profile_circle_s">
							<img src="https://static.virtuagym.com/v29522/thumb/userpic/s/b95fd69b8250e12fb728be6a3e5c600567dc.jpg" width="38" height="38">
						</div>
					</a>
				</td>
				<td class="l_p_link">
					<a href="/user/fbiofilial-santos">
						Fábio(Filial santos)   ;:)
						<img src="https://static.virtuagym.com/v29521498/images/gender-m.png">
					</a>
				</td>
				<td>115,872</td>
				<td>90,825</td>
				<td>12,351</td>
				<td class="r">
											<a href="/search/user?country=br"><img class="leaderboard_flags" src="https://static.virtuagym.com/v29521498/images/flags/br.png"></a>
									</td>
			</tr>
								<tr style="background-color:#f7f7f7;">
				<td class="l">13.</td>
				<td class="l_pic">
					<a href="/user/juridiconayara">
						<div class="profile_circle_s">
							<img src="https://static.virtuagym.com/v29522/thumb/userpic/s/1e16e8e2ece6ee33a9c85c208c86514c5fbf.jpg" width="38" height="38">
						</div>
					</a>
				</td>
				<td class="l_p_link">
					<a href="/user/juridiconayara">
						Gilcley
						<img src="https://static.virtuagym.com/v29521498/images/gender-m.png">
					</a>
				</td>
				<td>113,835</td>
				<td>82,654</td>
				<td>7,870</td>
				<td class="r">
											<a href="/search/user?country=br"><img class="leaderboard_flags" src="https://static.virtuagym.com/v29521498/images/flags/br.png"></a>
									</td>
			</tr>
								<tr>
				<td class="l">14.</td>
				<td class="l_pic">
					<a href="/user/wesleyrodriguesamaro">
						<div class="profile_circle_s">
							<img src="https://static.virtuagym.com/v29522/thumb/userpic/s/88f2c6c1b1d9a2d186ff8c8ae2c74416239c.jpg" width="38" height="38">
						</div>
					</a>
				</td>
				<td class="l_p_link">
					<a href="/user/wesleyrodriguesamaro">
						Wesley
						<img src="https://static.virtuagym.com/v29521498/images/gender-m.png">
					</a>
				</td>
				<td>112,000</td>
				<td>120,354</td>
				<td>12,082</td>
				<td class="r">
											<a href="/search/user?country=br"><img class="leaderboard_flags" src="https://static.virtuagym.com/v29521498/images/flags/br.png"></a>
									</td>
			</tr>
								<tr style="background-color:#f7f7f7;">
				<td class="l">15.</td>
				<td class="l_pic">
					<a href="/user/guimaraesolivier">
						<div class="profile_circle_s">
							<img src="https://static.virtuagym.com/v29522/thumb/userpic/s/368dc872db691943d734c510b83ab689e9ff.jpg" width="38" height="38">
						</div>
					</a>
				</td>
				<td class="l_p_link">
					<a href="/user/guimaraesolivier">
						O G
						<img src="https://static.virtuagym.com/v29521498/images/gender-m.png">
					</a>
				</td>
				<td>108,870</td>
				<td>180,703</td>
				<td>21,065</td>
				<td class="r">
											<a href="/search/user?country=fr"><img class="leaderboard_flags" src="https://static.virtuagym.com/v29521498/images/flags/fr.png"></a>
									</td>
			</tr>
								<tr>
				<td class="l">16.</td>
				<td class="l_pic">
					<a href="/user/tylaodonoghue123">
						<div class="profile_circle_s">
							<img src="https://static.virtuagym.com/v29522/thumb/userpic/s//images/default-profile-picture-female.jpg" width="38" height="38">
						</div>
					</a>
				</td>
				<td class="l_p_link">
					<a href="/user/tylaodonoghue123">
						tylaodonoghue123
						<img src="https://static.virtuagym.com/v29521498/images/gender-f.png">
					</a>
				</td>
				<td>108,479</td>
				<td>87,722</td>
				<td>9,429</td>
				<td class="r">
											<a href="/search/user?country=za"><img class="leaderboard_flags" src="https://static.virtuagym.com/v29521498/images/flags/za.png"></a>
									</td>
			</tr>
								<tr style="background-color:#f7f7f7;">
				<td class="l">17.</td>
				<td class="l_pic">
					<a href="/user/pascoule2">
						<div class="profile_circle_s">
							<img src="https://static.virtuagym.com/v29522/thumb/userpic/s//images/default-profile-picture-female.jpg" width="38" height="38">
						</div>
					</a>
				</td>
				<td class="l_p_link">
					<a href="/user/pascoule2">
						pascoule2
						<img src="https://static.virtuagym.com/v29521498/images/gender-f.png">
					</a>
				</td>
				<td>106,466</td>
				<td>97,095</td>
				<td>15,256</td>
				<td class="r">
											<a href="/search/user?country=fr"><img class="leaderboard_flags" src="https://static.virtuagym.com/v29521498/images/flags/fr.png"></a>
									</td>
			</tr>
								<tr>
				<td class="l">18.</td>
				<td class="l_pic">
					<a href="/user/rleonard2010">
						<div class="profile_circle_s">
							<img src="https://static.virtuagym.com/v29522/thumb/userpic/s/6836bf40a280430b4766ccb9c346f4cdeace.jpg" width="38" height="38">
						</div>
					</a>
				</td>
				<td class="l_p_link">
					<a href="/user/rleonard2010">
						Raymond Leonard
						<img src="https://static.virtuagym.com/v29521498/images/gender-m.png">
					</a>
				</td>
				<td>105,467</td>
				<td>186,794</td>
				<td>15,434</td>
				<td class="r">
											<a href="/search/user?country=gb"><img class="leaderboard_flags" src="https://static.virtuagym.com/v29521498/images/flags/gb.png"></a>
									</td>
			</tr>
								<tr style="background-color:#f7f7f7;">
				<td class="l">19.</td>
				<td class="l_pic">
					<a href="/user/johanpas">
						<div class="profile_circle_s">
							<img src="https://static.virtuagym.com/v29522/thumb/userpic/s//images/default-profile-picture-male.jpg" width="38" height="38">
						</div>
					</a>
				</td>
				<td class="l_p_link">
					<a href="/user/johanpas">
						johanpas
						<img src="https://static.virtuagym.com/v29521498/images/gender-m.png">
					</a>
				</td>
				<td>100,430</td>
				<td>11,822</td>
				<td>18,541</td>
				<td class="r">
											<a href="/search/user?country=be"><img class="leaderboard_flags" src="https://static.virtuagym.com/v29521498/images/flags/be.png"></a>
									</td>
			</tr>
								<tr>
				<td class="l">20.</td>
				<td class="l_pic">
					<a href="/user/pjotter">
						<div class="profile_circle_s">
							<img src="https://static.virtuagym.com/v29522/thumb/userpic/s/03c2114b88ae2df60ab7ef2f6457e07b5811.jpg" width="38" height="38">
						</div>
					</a>
				</td>
				<td class="l_p_link">
					<a href="/user/pjotter">
						Peter
						<img src="https://static.virtuagym.com/v29521498/images/gender-m.png">
					</a>
				</td>
				<td>100,215</td>
				<td>84,232</td>
				<td>15,303</td>
				<td class="r">
											<a href="/search/user?country=nl"><img class="leaderboard_flags" src="https://static.virtuagym.com/v29521498/images/flags/nl.png"></a>
									</td>
			</tr>
								<tr style="background-color:#f7f7f7;">
				<td class="l">21.</td>
				<td class="l_pic">
					<a href="/user/ninine20">
						<div class="profile_circle_s">
							<img src="https://static.virtuagym.com/v29522/thumb/userpic/s//images/default-profile-picture-female.jpg" width="38" height="38">
						</div>
					</a>
				</td>
				<td class="l_p_link">
					<a href="/user/ninine20">
						ninine2.0
						<img src="https://static.virtuagym.com/v29521498/images/gender-f.png">
					</a>
				</td>
				<td>99,683</td>
				<td>38,526</td>
				<td>18,486</td>
				<td class="r">
											<a href="/search/user?country=fr"><img class="leaderboard_flags" src="https://static.virtuagym.com/v29521498/images/flags/fr.png"></a>
									</td>
			</tr>
								<tr>
				<td class="l">22.</td>
				<td class="l_pic">
					<a href="/user/dionneskidmore">
						<div class="profile_circle_s">
							<img src="https://static.virtuagym.com/v29522/thumb/userpic/s/b94d35f33aa4c7b0479fb7b81c110289163f.jpg" width="38" height="38">
						</div>
					</a>
				</td>
				<td class="l_p_link">
					<a href="/user/dionneskidmore">
						Dionne Skidmore
						<img src="https://static.virtuagym.com/v29521498/images/gender-f.png">
					</a>
				</td>
				<td>99,312</td>
				<td>53,048</td>
				<td>12,962</td>
				<td class="r">
											<a href="/search/user?country=gb"><img class="leaderboard_flags" src="https://static.virtuagym.com/v29521498/images/flags/gb.png"></a>
									</td>
			</tr>
								<tr style="background-color:#f7f7f7;">
				<td class="l">23.</td>
				<td class="l_pic">
					<a href="/user/theog">
						<div class="profile_circle_s">
							<img src="https://static.virtuagym.com/v29522/thumb/userpic/s/2cc896843a7796add7af62e538269ef56206.jpg" width="38" height="38">
						</div>
					</a>
				</td>
				<td class="l_p_link">
					<a href="/user/theog">
						theo_g
						<img src="https://static.virtuagym.com/v29521498/images/gender-m.png">
					</a>
				</td>
				<td>96,453</td>
				<td>65,188</td>
				<td>5,561</td>
				<td class="r">
											<a href="/search/user?country=gb"><img class="leaderboard_flags" src="https://static.virtuagym.com/v29521498/images/flags/gb.png"></a>
									</td>
			</tr>
								<tr>
				<td class="l">24.</td>
				<td class="l_pic">
					<a href="/user/rabbimallahbirdir">
						<div class="profile_circle_s">
							<img src="https://static.virtuagym.com/v29522/thumb/userpic/s/f48d2c6076e23040fafbc57222ac5dc46268.jpg" width="38" height="38">
						</div>
					</a>
				</td>
				<td class="l_p_link">
					<a href="/user/rabbimallahbirdir">
						Ertan
						<img src="https://static.virtuagym.com/v29521498/images/gender-m.png">
					</a>
				</td>
				<td>96,252</td>
				<td>65,695</td>
				<td>7,657</td>
				<td class="r">
									</td>
			</tr>
								<tr style="background-color:#f7f7f7;">
				<td class="l">25.</td>
				<td class="l_pic">
					<a href="/user/barbaracalerogonzalezmora">
						<div class="profile_circle_s">
							<img src="https://static.virtuagym.com/v29522/thumb/userpic/s/3f893b483dc64ee2186a4d76c921de0fcaed.jpg" width="38" height="38">
						</div>
					</a>
				</td>
				<td class="l_p_link">
					<a href="/user/barbaracalerogonzalezmora">
						Bárbara Calero González-Mora
						<img src="https://static.virtuagym.com/v29521498/images/gender-f.png">
					</a>
				</td>
				<td>96,200</td>
				<td>65,509</td>
				<td>15,808</td>
				<td class="r">
											<a href="/search/user?country=es"><img class="leaderboard_flags" src="https://static.virtuagym.com/v29521498/images/flags/es.png"></a>
									</td>
			</tr>
								<tr>
				<td class="l">26.</td>
				<td class="l_pic">
					<a href="/user/sarahchiav">
						<div class="profile_circle_s">
							<img src="https://static.virtuagym.com/v29522/thumb/userpic/s//images/default-profile-picture-female.jpg" width="38" height="38">
						</div>
					</a>
				</td>
				<td class="l_p_link">
					<a href="/user/sarahchiav">
						sarahchiav
						<img src="https://static.virtuagym.com/v29521498/images/gender-f.png">
					</a>
				</td>
				<td>95,859</td>
				<td>79,438</td>
				<td>13,026</td>
				<td class="r">
											<a href="/search/user?country=ch"><img class="leaderboard_flags" src="https://static.virtuagym.com/v29521498/images/flags/ch.png"></a>
									</td>
			</tr>
								<tr style="background-color:#f7f7f7;">
				<td class="l">27.</td>
				<td class="l_pic">
					<a href="/user/jjeanm1979">
						<div class="profile_circle_s">
							<img src="https://static.virtuagym.com/v29522/thumb/userpic/s/11b928612587204009821c9f6ad499d7c109.jpg" width="38" height="38">
						</div>
					</a>
				</td>
				<td class="l_p_link">
					<a href="/user/jjeanm1979">
						Janet Majer
						<img src="https://static.virtuagym.com/v29521498/images/gender-f.png">
					</a>
				</td>
				<td>94,704</td>
				<td>62,015</td>
				<td>12,985</td>
				<td class="r">
											<a href="/search/user?country=ca"><img class="leaderboard_flags" src="https://static.virtuagym.com/v29521498/images/flags/ca.png"></a>
									</td>
			</tr>
								<tr>
				<td class="l">28.</td>
				<td class="l_pic">
					<a href="/user/sallybrdx">
						<div class="profile_circle_s">
							<img src="https://static.virtuagym.com/v29522/thumb/userpic/s/1e2d8982754c9dc29556ff636155958b570f.jpg" width="38" height="38">
						</div>
					</a>
				</td>
				<td class="l_p_link">
					<a href="/user/sallybrdx">
						Sally Hudson
						<img src="https://static.virtuagym.com/v29521498/images/gender-f.png">
					</a>
				</td>
				<td>93,080</td>
				<td>79,913</td>
				<td>13,107</td>
				<td class="r">
											<a href="/search/user?country=za"><img class="leaderboard_flags" src="https://static.virtuagym.com/v29521498/images/flags/za.png"></a>
									</td>
			</tr>
								<tr style="background-color:#f7f7f7;">
				<td class="l">29.</td>
				<td class="l_pic">
					<a href="/user/antonruizsanchezu0pr">
						<div class="profile_circle_s">
							<img src="https://static.virtuagym.com/v29522/thumb/userpic/s//images/default-profile-picture-male.jpg" width="38" height="38">
						</div>
					</a>
				</td>
				<td class="l_p_link">
					<a href="/user/antonruizsanchezu0pr">
						anton.ruiz.sanchezu0Pr
						<img src="https://static.virtuagym.com/v29521498/images/gender-m.png">
					</a>
				</td>
				<td>92,842</td>
				<td>90,821</td>
				<td>10,383</td>
				<td class="r">
											<a href="/search/user?country=es"><img class="leaderboard_flags" src="https://static.virtuagym.com/v29521498/images/flags/es.png"></a>
									</td>
			</tr>
								<tr>
				<td class="l">30.</td>
				<td class="l_pic">
					<a href="/user/natalie123">
						<div class="profile_circle_s">
							<img src="https://static.virtuagym.com/v29522/thumb/userpic/s/a75ee931188f047860f401f0826aa0702ffe.jpg" width="38" height="38">
						</div>
					</a>
				</td>
				<td class="l_p_link">
					<a href="/user/natalie123">
						Natalie Preece
						<img src="https://static.virtuagym.com/v29521498/images/gender-f.png">
					</a>
				</td>
				<td>92,349</td>
				<td>57,853</td>
				<td>11,026</td>
				<td class="r">
											<a href="/search/user?country=gb"><img class="leaderboard_flags" src="https://static.virtuagym.com/v29521498/images/flags/gb.png"></a>
									</td>
			</tr>
								<tr style="background-color:#f7f7f7;">
				<td class="l">31.</td>
				<td class="l_pic">
					<a href="/user/melanylottering">
						<div class="profile_circle_s">
							<img src="https://static.virtuagym.com/v29522/thumb/userpic/s/b099c9a0aaf686fe86d9449dabb76d8c9da9.jpg" width="38" height="38">
						</div>
					</a>
				</td>
				<td class="l_p_link">
					<a href="/user/melanylottering">
						Melany Mull
						<img src="https://static.virtuagym.com/v29521498/images/gender-f.png">
					</a>
				</td>
				<td>92,316</td>
				<td>76,600</td>
				<td>9,663</td>
				<td class="r">
											<a href="/search/user?country=nl"><img class="leaderboard_flags" src="https://static.virtuagym.com/v29521498/images/flags/nl.png"></a>
									</td>
			</tr>
								<tr>
				<td class="l">32.</td>
				<td class="l_pic">
					<a href="/user/ingeborgtissingh">
						<div class="profile_circle_s">
							<img src="https://static.virtuagym.com/v29522/thumb/userpic/s/8fbc82452c02c3359a20ea1437a386b48d90.jpg" width="38" height="38">
						</div>
					</a>
				</td>
				<td class="l_p_link">
					<a href="/user/ingeborgtissingh">
						Ingeborg Tissingh
						<img src="https://static.virtuagym.com/v29521498/images/gender-f.png">
					</a>
				</td>
				<td>92,164</td>
				<td>54,276</td>
				<td>11,911</td>
				<td class="r">
											<a href="/search/user?country=nl"><img class="leaderboard_flags" src="https://static.virtuagym.com/v29521498/images/flags/nl.png"></a>
									</td>
			</tr>
								<tr style="background-color:#f7f7f7;">
				<td class="l">33.</td>
				<td class="l_pic">
					<a href="/user/edersatch">
						<div class="profile_circle_s">
							<img src="https://static.virtuagym.com/v29522/thumb/userpic/s/aa00764cb097145ad7d5193f0fd856088cec.jpg" width="38" height="38">
						</div>
					</a>
				</td>
				<td class="l_p_link">
					<a href="/user/edersatch">
						EDER RAFAEL RODRIGUEZ OROPEZA
						<img src="https://static.virtuagym.com/v29521498/images/gender-m.png">
					</a>
				</td>
				<td>90,230</td>
				<td>119,375</td>
				<td>10,946</td>
				<td class="r">
											<a href="/search/user?country=mx"><img class="leaderboard_flags" src="https://static.virtuagym.com/v29521498/images/flags/mx.png"></a>
									</td>
			</tr>
								<tr>
				<td class="l">34.</td>
				<td class="l_pic">
					<a href="/user/marialexgallegos">
						<div class="profile_circle_s">
							<img src="https://static.virtuagym.com/v29522/thumb/userpic/s/c23ce91cd82d94ee26d0aa1a9b4dbc332f4e.jpg" width="38" height="38">
						</div>
					</a>
				</td>
				<td class="l_p_link">
					<a href="/user/marialexgallegos">
						Marialex Gallegos
						<img src="https://static.virtuagym.com/v29521498/images/gender-f.png">
					</a>
				</td>
				<td>90,180</td>
				<td>109,891</td>
				<td>17,035</td>
				<td class="r">
											<a href="/search/user?country=cr"><img class="leaderboard_flags" src="https://static.virtuagym.com/v29521498/images/flags/cr.png"></a>
									</td>
			</tr>
								<tr style="background-color:#f7f7f7;">
				<td class="l">35.</td>
				<td class="l_pic">
					<a href="/user/becs1882">
						<div class="profile_circle_s">
							<img src="https://static.virtuagym.com/v29522/thumb/userpic/s/360685cb591d27ef20b11153f5093970c143.jpg" width="38" height="38">
						</div>
					</a>
				</td>
				<td class="l_p_link">
					<a href="/user/becs1882">
						Rebecca
						<img src="https://static.virtuagym.com/v29521498/images/gender-f.png">
					</a>
				</td>
				<td>89,314</td>
				<td>16,724</td>
				<td>16,474</td>
				<td class="r">
											<a href="/search/user?country=gb"><img class="leaderboard_flags" src="https://static.virtuagym.com/v29521498/images/flags/gb.png"></a>
									</td>
			</tr>
								<tr>
				<td class="l">36.</td>
				<td class="l_pic">
					<a href="/user/dygdnsn">
						<div class="profile_circle_s">
							<img src="https://static.virtuagym.com/v29522/thumb/userpic/s//images/default-profile-picture-female.jpg" width="38" height="38">
						</div>
					</a>
				</td>
				<td class="l_p_link">
					<a href="/user/dygdnsn">
						Duygu Danişan
						<img src="https://static.virtuagym.com/v29521498/images/gender-f.png">
					</a>
				</td>
				<td>87,366</td>
				<td>136,408</td>
				<td>15,699</td>
				<td class="r">
									</td>
			</tr>
								<tr style="background-color:#f7f7f7;">
				<td class="l">37.</td>
				<td class="l_pic">
					<a href="/user/jabsonnacimento">
						<div class="profile_circle_s">
							<img src="https://static.virtuagym.com/v29522/thumb/userpic/s/c678576e0439f5bc2fdac5e3dafa0aaa142c.jpg" width="38" height="38">
						</div>
					</a>
				</td>
				<td class="l_p_link">
					<a href="/user/jabsonnacimento">
						Jabson
						<img src="https://static.virtuagym.com/v29521498/images/gender-m.png">
					</a>
				</td>
				<td>87,169</td>
				<td>76,646</td>
				<td>17,450</td>
				<td class="r">
											<a href="/search/user?country=br"><img class="leaderboard_flags" src="https://static.virtuagym.com/v29521498/images/flags/br.png"></a>
									</td>
			</tr>
								<tr>
				<td class="l">38.</td>
				<td class="l_pic">
					<a href="/user/nikoli-jettspt">
						<div class="profile_circle_s">
							<img src="https://static.virtuagym.com/v29522/thumb/userpic/s/8354837b067b592229f0eec750508c5ea2b3.jpg" width="38" height="38">
						</div>
					</a>
				</td>
				<td class="l_p_link">
					<a href="/user/nikoli-jettspt">
						Nikoli
						<img src="https://static.virtuagym.com/v29521498/images/gender-m.png">
					</a>
				</td>
				<td>86,790</td>
				<td>82,379</td>
				<td>10,957</td>
				<td class="r">
											<a href="/search/user?country=gb"><img class="leaderboard_flags" src="https://static.virtuagym.com/v29521498/images/flags/gb.png"></a>
									</td>
			</tr>
								<tr style="background-color:#f7f7f7;">
				<td class="l">39.</td>
				<td class="l_pic">
					<a href="/user/eballester">
						<div class="profile_circle_s">
							<img src="https://static.virtuagym.com/v29522/thumb/userpic/s/02268c89e5b368229b58221be725e23d7f56.jpg" width="38" height="38">
						</div>
					</a>
				</td>
				<td class="l_p_link">
					<a href="/user/eballester">
						Enrique Ballester Fernandez-Bravo
						<img src="https://static.virtuagym.com/v29521498/images/gender-m.png">
					</a>
				</td>
				<td>86,013</td>
				<td>133,474</td>
				<td>14,885</td>
				<td class="r">
											<a href="/search/user?country=es"><img class="leaderboard_flags" src="https://static.virtuagym.com/v29521498/images/flags/es.png"></a>
									</td>
			</tr>
								<tr>
				<td class="l">40.</td>
				<td class="l_pic">
					<a href="/user/vera-melkert">
						<div class="profile_circle_s">
							<img src="https://static.virtuagym.com/v29522/thumb/userpic/s/b6c6fdce89e5f2820e2794b7adf4b83fc0df.jpg" width="38" height="38">
						</div>
					</a>
				</td>
				<td class="l_p_link">
					<a href="/user/vera-melkert">
						Vera Melkert
						<img src="https://static.virtuagym.com/v29521498/images/gender-f.png">
					</a>
				</td>
				<td>85,747</td>
				<td>46,258</td>
				<td>11,578</td>
				<td class="r">
											<a href="/search/user?country=nl"><img class="leaderboard_flags" src="https://static.virtuagym.com/v29521498/images/flags/nl.png"></a>
									</td>
			</tr>
								<tr style="background-color:#f7f7f7;">
				<td class="l">41.</td>
				<td class="l_pic">
					<a href="/user/kz768546">
						<div class="profile_circle_s">
							<img src="https://static.virtuagym.com/v29522/thumb/userpic/s/30aac3ae9fba00593fd1516782fe15cc8f5b.jpg" width="38" height="38">
						</div>
					</a>
				</td>
				<td class="l_p_link">
					<a href="/user/kz768546">
						Karl
						<img src="https://static.virtuagym.com/v29521498/images/gender-m.png">
					</a>
				</td>
				<td>85,745</td>
				<td>100,361</td>
				<td>11,058</td>
				<td class="r">
											<a href="/search/user?country=de"><img class="leaderboard_flags" src="https://static.virtuagym.com/v29521498/images/flags/de.png"></a>
									</td>
			</tr>
								<tr>
				<td class="l">42.</td>
				<td class="l_pic">
					<a href="/user/mattiaracing">
						<div class="profile_circle_s">
							<img src="https://static.virtuagym.com/v29522/thumb/userpic/s/images/profile_pic_m.jpg" width="38" height="38">
						</div>
					</a>
				</td>
				<td class="l_p_link">
					<a href="/user/mattiaracing">
						MATTIA INTRIERI
						<img src="https://static.virtuagym.com/v29521498/images/gender-m.png">
					</a>
				</td>
				<td>84,761</td>
				<td>115,760</td>
				<td>14,719</td>
				<td class="r">
											<a href="/search/user?country=it"><img class="leaderboard_flags" src="https://static.virtuagym.com/v29521498/images/flags/it.png"></a>
									</td>
			</tr>
								<tr style="background-color:#f7f7f7;">
				<td class="l">43.</td>
				<td class="l_pic">
					<a href="/user/hayr">
						<div class="profile_circle_s">
							<img src="https://static.virtuagym.com/v29522/thumb/userpic/s//images/default-profile-picture-male.jpg" width="38" height="38">
						</div>
					</a>
				</td>
				<td class="l_p_link">
					<a href="/user/hayr">
						HayR
						<img src="https://static.virtuagym.com/v29521498/images/gender-m.png">
					</a>
				</td>
				<td>83,835</td>
				<td>64,360</td>
				<td>11,174</td>
				<td class="r">
											<a href="/search/user?country=nl"><img class="leaderboard_flags" src="https://static.virtuagym.com/v29521498/images/flags/nl.png"></a>
									</td>
			</tr>
								<tr>
				<td class="l">44.</td>
				<td class="l_pic">
					<a href="/user/tylaspadx">
						<div class="profile_circle_s">
							<img src="https://static.virtuagym.com/v29522/thumb/userpic/s//images/default-profile-picture-female.jpg" width="38" height="38">
						</div>
					</a>
				</td>
				<td class="l_p_link">
					<a href="/user/tylaspadx">
						Tylah Spadano
						<img src="https://static.virtuagym.com/v29521498/images/gender-f.png">
					</a>
				</td>
				<td>83,457</td>
				<td>50,623</td>
				<td>11,908</td>
				<td class="r">
											<a href="/search/user?country=au"><img class="leaderboard_flags" src="https://static.virtuagym.com/v29521498/images/flags/au.png"></a>
									</td>
			</tr>
								<tr style="background-color:#f7f7f7;">
				<td class="l">45.</td>
				<td class="l_pic">
					<a href="/user/severinedeza">
						<div class="profile_circle_s">
							<img src="https://static.virtuagym.com/v29522/thumb/userpic/s/f45c8c81d0485005b2586795db62e7c780cc.jpg" width="38" height="38">
						</div>
					</a>
				</td>
				<td class="l_p_link">
					<a href="/user/severinedeza">
						severine.deza
						<img src="https://static.virtuagym.com/v29521498/images/gender-f.png">
					</a>
				</td>
				<td>82,000</td>
				<td>367,295</td>
				<td>49,012</td>
				<td class="r">
											<a href="/search/user?country=fr"><img class="leaderboard_flags" src="https://static.virtuagym.com/v29521498/images/flags/fr.png"></a>
									</td>
			</tr>
								<tr>
				<td class="l">46.</td>
				<td class="l_pic">
					<a href="/user/tonylederle">
						<div class="profile_circle_s">
							<img src="https://static.virtuagym.com/v29522/thumb/userpic/s//images/default-profile-picture-male.jpg" width="38" height="38">
						</div>
					</a>
				</td>
				<td class="l_p_link">
					<a href="/user/tonylederle">
						Tony Lederle
						<img src="https://static.virtuagym.com/v29521498/images/gender-m.png">
					</a>
				</td>
				<td>81,576</td>
				<td>72,839</td>
				<td>12,702</td>
				<td class="r">
											<a href="/search/user?country=za"><img class="leaderboard_flags" src="https://static.virtuagym.com/v29521498/images/flags/za.png"></a>
									</td>
			</tr>
								<tr style="background-color:#f7f7f7;">
				<td class="l">47.</td>
				<td class="l_pic">
					<a href="/user/jessicagilbert1">
						<div class="profile_circle_s">
							<img src="https://static.virtuagym.com/v29522/thumb/userpic/s/23aa82413e34d3882a075cf70ff3636616fb.jpg" width="38" height="38">
						</div>
					</a>
				</td>
				<td class="l_p_link">
					<a href="/user/jessicagilbert1">
						Jessica Gilbert
						<img src="https://static.virtuagym.com/v29521498/images/gender-f.png">
					</a>
				</td>
				<td>80,951</td>
				<td>74,101</td>
				<td>14,145</td>
				<td class="r">
											<a href="/search/user?country=gb"><img class="leaderboard_flags" src="https://static.virtuagym.com/v29521498/images/flags/gb.png"></a>
									</td>
			</tr>
								<tr>
				<td class="l">48.</td>
				<td class="l_pic">
					<a href="/user/gamusino">
						<div class="profile_circle_s">
							<img src="https://static.virtuagym.com/v29522/thumb/userpic/s/85b75799af59be0ed60ae533bbb3f1ff7925.jpg" width="38" height="38">
						</div>
					</a>
				</td>
				<td class="l_p_link">
					<a href="/user/gamusino">
						Mario
						<img src="https://static.virtuagym.com/v29521498/images/gender-m.png">
					</a>
				</td>
				<td>80,835</td>
				<td>53,619</td>
				<td>7,811</td>
				<td class="r">
											<a href="/search/user?country=es"><img class="leaderboard_flags" src="https://static.virtuagym.com/v29521498/images/flags/es.png"></a>
									</td>
			</tr>
								<tr style="background-color:#f7f7f7;">
				<td class="l">49.</td>
				<td class="l_pic">
					<a href="/user/irmazandbergen">
						<div class="profile_circle_s">
							<img src="https://static.virtuagym.com/v29522/thumb/userpic/s//images/default-profile-picture-female.jpg" width="38" height="38">
						</div>
					</a>
				</td>
				<td class="l_p_link">
					<a href="/user/irmazandbergen">
						Irma Zandbergen
						<img src="https://static.virtuagym.com/v29521498/images/gender-f.png">
					</a>
				</td>
				<td>80,684</td>
				<td>54,371</td>
				<td>10,939</td>
				<td class="r">
											<a href="/search/user?country=nl"><img class="leaderboard_flags" src="https://static.virtuagym.com/v29521498/images/flags/nl.png"></a>
									</td>
			</tr>
								<tr>
				<td class="l">50.</td>
				<td class="l_pic">
					<a href="/user/jordyvanrhee">
						<div class="profile_circle_s">
							<img src="https://static.virtuagym.com/v29522/thumb/userpic/s/a621a51457e12ed2e86d1310ad8b42c8c214.jpg" width="38" height="38">
						</div>
					</a>
				</td>
				<td class="l_p_link">
					<a href="/user/jordyvanrhee">
						Jordy van Rhee
						<img src="https://static.virtuagym.com/v29521498/images/gender-m.png">
					</a>
				</td>
				<td>80,274</td>
				<td>144,089</td>
				<td>18,765</td>
				<td class="r">
											<a href="/search/user?country=nl"><img class="leaderboard_flags" src="https://static.virtuagym.com/v29521498/images/flags/nl.png"></a>
									</td>
			</tr>
								<tr style="background-color:#f7f7f7;">
				<td class="l">51.</td>
				<td class="l_pic">
					<a href="/user/wayne-smith-pt">
						<div class="profile_circle_s">
							<img src="https://static.virtuagym.com/v29522/thumb/userpic/s/59796fc33e9ba66f87ae694fd276f33cb8de.jpg" width="38" height="38">
						</div>
					</a>
				</td>
				<td class="l_p_link">
					<a href="/user/wayne-smith-pt">
						Wayne Smith PT
						<img src="https://static.virtuagym.com/v29521498/images/gender-m.png">
					</a>
				</td>
				<td>79,795</td>
				<td>65,565</td>
				<td>12,215</td>
				<td class="r">
											<a href="/search/user?country=gb"><img class="leaderboard_flags" src="https://static.virtuagym.com/v29521498/images/flags/gb.png"></a>
									</td>
			</tr>
								<tr>
				<td class="l">52.</td>
				<td class="l_pic">
					<a href="/user/radovanovicaleksa84">
						<div class="profile_circle_s">
							<img src="https://static.virtuagym.com/v29522/thumb/userpic/s/b5c516ce5e018b68f9f212b83674bac6e0d2.jpg" width="38" height="38">
						</div>
					</a>
				</td>
				<td class="l_p_link">
					<a href="/user/radovanovicaleksa84">
						Aleksa Radovanovic
						<img src="https://static.virtuagym.com/v29521498/images/gender-m.png">
					</a>
				</td>
				<td>79,727</td>
				<td>90,100</td>
				<td>11,491</td>
				<td class="r">
											<a href="/search/user?country=nl"><img class="leaderboard_flags" src="https://static.virtuagym.com/v29521498/images/flags/nl.png"></a>
									</td>
			</tr>
								<tr style="background-color:#f7f7f7;">
				<td class="l">53.</td>
				<td class="l_pic">
					<a href="/user/karenellisrvt">
						<div class="profile_circle_s">
							<img src="https://static.virtuagym.com/v29522/thumb/userpic/s/9e9103bbd7d03850691224fe4993b7e0d204.jpg" width="38" height="38">
						</div>
					</a>
				</td>
				<td class="l_p_link">
					<a href="/user/karenellisrvt">
						Karen Ellis
						<img src="https://static.virtuagym.com/v29521498/images/gender-f.png">
					</a>
				</td>
				<td>79,677</td>
				<td>39,984</td>
				<td>9,577</td>
				<td class="r">
											<a href="/search/user?country=us"><img class="leaderboard_flags" src="https://static.virtuagym.com/v29521498/images/flags/us.png"></a>
									</td>
			</tr>
								<tr>
				<td class="l">54.</td>
				<td class="l_pic">
					<a href="/user/mddwinterwerp">
						<div class="profile_circle_s">
							<img src="https://static.virtuagym.com/v29522/thumb/userpic/s/5517ac9ce11968757328e53a40ffb210f863.jpg" width="38" height="38">
						</div>
					</a>
				</td>
				<td class="l_p_link">
					<a href="/user/mddwinterwerp">
						mddwinterwerp
						<img src="https://static.virtuagym.com/v29521498/images/gender-f.png">
					</a>
				</td>
				<td>79,114</td>
				<td>224,448</td>
				<td>20,751</td>
				<td class="r">
											<a href="/search/user?country=nl"><img class="leaderboard_flags" src="https://static.virtuagym.com/v29521498/images/flags/nl.png"></a>
									</td>
			</tr>
								<tr style="background-color:#f7f7f7;">
				<td class="l">55.</td>
				<td class="l_pic">
					<a href="/user/customerservicecv6u">
						<div class="profile_circle_s">
							<img src="https://static.virtuagym.com/v29522/thumb/userpic/s/264ea91fc097bcb58917e3b9348cefcb179c.jpg" width="38" height="38">
						</div>
					</a>
				</td>
				<td class="l_p_link">
					<a href="/user/customerservicecv6u">
						Ray Hecita
						<img src="https://static.virtuagym.com/v29521498/images/gender-m.png">
					</a>
				</td>
				<td>78,946</td>
				<td>57,796</td>
				<td>10,416</td>
				<td class="r">
											<a href="/search/user?country=us"><img class="leaderboard_flags" src="https://static.virtuagym.com/v29521498/images/flags/us.png"></a>
									</td>
			</tr>
								<tr>
				<td class="l">56.</td>
				<td class="l_pic">
					<a href="/user/desireedejong1991">
						<div class="profile_circle_s">
							<img src="https://static.virtuagym.com/v29522/thumb/userpic/s/bc5632d1b27a6f031eeeb68e9f64ab2f954a.jpg" width="38" height="38">
						</div>
					</a>
				</td>
				<td class="l_p_link">
					<a href="/user/desireedejong1991">
						desireedejong1991
						<img src="https://static.virtuagym.com/v29521498/images/gender-f.png">
					</a>
				</td>
				<td>78,926</td>
				<td>40,861</td>
				<td>7,872</td>
				<td class="r">
											<a href="/search/user?country=nl"><img class="leaderboard_flags" src="https://static.virtuagym.com/v29521498/images/flags/nl.png"></a>
									</td>
			</tr>
								<tr style="background-color:#f7f7f7;">
				<td class="l">57.</td>
				<td class="l_pic">
					<a href="/user/jeroen71dr">
						<div class="profile_circle_s">
							<img src="https://static.virtuagym.com/v29522/thumb/userpic/s/64a954409635437f158422dc6778950d1acc.png" width="38" height="38">
						</div>
					</a>
				</td>
				<td class="l_p_link">
					<a href="/user/jeroen71dr">
						Jeroen Tokmetzis
						<img src="https://static.virtuagym.com/v29521498/images/gender-m.png">
					</a>
				</td>
				<td>78,021</td>
				<td>57,547</td>
				<td>9,700</td>
				<td class="r">
											<a href="/search/user?country=nl"><img class="leaderboard_flags" src="https://static.virtuagym.com/v29521498/images/flags/nl.png"></a>
									</td>
			</tr>
								<tr>
				<td class="l">58.</td>
				<td class="l_pic">
					<a href="/user/nsgigliotti">
						<div class="profile_circle_s">
							<img src="https://static.virtuagym.com/v29522/thumb/userpic/s/6b0ecd3def8fb83619ee7c679d91c73a316d.jpg" width="38" height="38">
						</div>
					</a>
				</td>
				<td class="l_p_link">
					<a href="/user/nsgigliotti">
						Sara Gigliotti
						<img src="https://static.virtuagym.com/v29521498/images/gender-f.png">
					</a>
				</td>
				<td>77,897</td>
				<td>46,955</td>
				<td>13,788</td>
				<td class="r">
											<a href="/search/user?country=us"><img class="leaderboard_flags" src="https://static.virtuagym.com/v29521498/images/flags/us.png"></a>
									</td>
			</tr>
								<tr style="background-color:#f7f7f7;">
				<td class="l">59.</td>
				<td class="l_pic">
					<a href="/user/trineke-fitfabrique">
						<div class="profile_circle_s">
							<img src="https://static.virtuagym.com/v29522/thumb/userpic/s/429210f7c762c95d1d43c9982a662a999acf.jpg" width="38" height="38">
						</div>
					</a>
				</td>
				<td class="l_p_link">
					<a href="/user/trineke-fitfabrique">
						Trineke Haasjes
						<img src="https://static.virtuagym.com/v29521498/images/gender-f.png">
					</a>
				</td>
				<td>77,368</td>
				<td>44,780</td>
				<td>11,579</td>
				<td class="r">
											<a href="/search/user?country=nl"><img class="leaderboard_flags" src="https://static.virtuagym.com/v29521498/images/flags/nl.png"></a>
									</td>
			</tr>
								<tr>
				<td class="l">60.</td>
				<td class="l_pic">
					<a href="/user/mara-rotger">
						<div class="profile_circle_s">
							<img src="https://static.virtuagym.com/v29522/thumb/userpic/s//images/default-profile-picture-female.jpg" width="38" height="38">
						</div>
					</a>
				</td>
				<td class="l_p_link">
					<a href="/user/mara-rotger">
						Maria Rotger
						<img src="https://static.virtuagym.com/v29521498/images/gender-f.png">
					</a>
				</td>
				<td>76,774</td>
				<td>134,047</td>
				<td>21,880</td>
				<td class="r">
											<a href="/search/user?country=es"><img class="leaderboard_flags" src="https://static.virtuagym.com/v29521498/images/flags/es.png"></a>
									</td>
			</tr>
								<tr style="background-color:#f7f7f7;">
				<td class="l">61.</td>
				<td class="l_pic">
					<a href="/user/kristyr-2">
						<div class="profile_circle_s">
							<img src="https://static.virtuagym.com/v29522/thumb/userpic/s//images/default-profile-picture-female.jpg" width="38" height="38">
						</div>
					</a>
				</td>
				<td class="l_p_link">
					<a href="/user/kristyr-2">
						Kristy Leigh
						<img src="https://static.virtuagym.com/v29521498/images/gender-f.png">
					</a>
				</td>
				<td>76,189</td>
				<td>33,620</td>
				<td>10,245</td>
				<td class="r">
											<a href="/search/user?country=au"><img class="leaderboard_flags" src="https://static.virtuagym.com/v29521498/images/flags/au.png"></a>
									</td>
			</tr>
								<tr>
				<td class="l">62.</td>
				<td class="l_pic">
					<a href="/user/edmanogym">
						<div class="profile_circle_s">
							<img src="https://static.virtuagym.com/v29522/thumb/userpic/s/a269e35860fec00f9260474b773799922e29.jpg" width="38" height="38">
						</div>
					</a>
				</td>
				<td class="l_p_link">
					<a href="/user/edmanogym">
						Edward Appiah
						<img src="https://static.virtuagym.com/v29521498/images/gender-m.png">
					</a>
				</td>
				<td>75,761</td>
				<td>62,992</td>
				<td>9,803</td>
				<td class="r">
											<a href="/search/user?country=be"><img class="leaderboard_flags" src="https://static.virtuagym.com/v29521498/images/flags/be.png"></a>
									</td>
			</tr>
								<tr style="background-color:#f7f7f7;">
				<td class="l">63.</td>
				<td class="l_pic">
					<a href="/user/coach-brown">
						<div class="profile_circle_s">
							<img src="https://static.virtuagym.com/v29522/thumb/userpic/s/2330d5facc0509c31d5312725c1686856066.jpg" width="38" height="38">
						</div>
					</a>
				</td>
				<td class="l_p_link">
					<a href="/user/coach-brown">
						Devon Brown
						<img src="https://static.virtuagym.com/v29521498/images/gender-m.png">
					</a>
				</td>
				<td>75,670</td>
				<td>49,486</td>
				<td>6,535</td>
				<td class="r">
											<a href="/search/user?country=us"><img class="leaderboard_flags" src="https://static.virtuagym.com/v29521498/images/flags/us.png"></a>
									</td>
			</tr>
								<tr>
				<td class="l">64.</td>
				<td class="l_pic">
					<a href="/user/carolinlinden">
						<div class="profile_circle_s">
							<img src="https://static.virtuagym.com/v29522/thumb/userpic/s/af6cc93d971f22f3441639aeb4dd44ea3768.jpg" width="38" height="38">
						</div>
					</a>
				</td>
				<td class="l_p_link">
					<a href="/user/carolinlinden">
						Carolin Linden
						<img src="https://static.virtuagym.com/v29521498/images/gender-f.png">
					</a>
				</td>
				<td>75,648</td>
				<td>45,303</td>
				<td>6,367</td>
				<td class="r">
											<a href="/search/user?country=de"><img class="leaderboard_flags" src="https://static.virtuagym.com/v29521498/images/flags/de.png"></a>
									</td>
			</tr>
								<tr style="background-color:#f7f7f7;">
				<td class="l">65.</td>
				<td class="l_pic">
					<a href="/user/gijzelaar">
						<div class="profile_circle_s">
							<img src="https://static.virtuagym.com/v29522/thumb/userpic/s/9677d7d35a3eef01514fc4d9da5871c54f63.jpg" width="38" height="38">
						</div>
					</a>
				</td>
				<td class="l_p_link">
					<a href="/user/gijzelaar">
						Gijs Molenaar
						<img src="https://static.virtuagym.com/v29521498/images/gender-m.png">
					</a>
				</td>
				<td>75,601</td>
				<td>66,168</td>
				<td>10,178</td>
				<td class="r">
											<a href="/search/user?country=nl"><img class="leaderboard_flags" src="https://static.virtuagym.com/v29521498/images/flags/nl.png"></a>
									</td>
			</tr>
								<tr>
				<td class="l">66.</td>
				<td class="l_pic">
					<a href="/user/jimijrm">
						<div class="profile_circle_s">
							<img src="https://static.virtuagym.com/v29522/thumb/userpic/s/05024ff3c1b995a5d46f576320b8b2ee1e6b.jpg" width="38" height="38">
						</div>
					</a>
				</td>
				<td class="l_p_link">
					<a href="/user/jimijrm">
						Jim Milligan
						<img src="https://static.virtuagym.com/v29521498/images/gender-m.png">
					</a>
				</td>
				<td>75,541</td>
				<td>55,172</td>
				<td>9,871</td>
				<td class="r">
											<a href="/search/user?country=gb"><img class="leaderboard_flags" src="https://static.virtuagym.com/v29521498/images/flags/gb.png"></a>
									</td>
			</tr>
								<tr style="background-color:#f7f7f7;">
				<td class="l">67.</td>
				<td class="l_pic">
					<a href="/user/marylouring">
						<div class="profile_circle_s">
							<img src="https://static.virtuagym.com/v29522/thumb/userpic/s//images/default-profile-picture-female.jpg" width="38" height="38">
						</div>
					</a>
				</td>
				<td class="l_p_link">
					<a href="/user/marylouring">
						Marie-Line Beauregard
						<img src="https://static.virtuagym.com/v29521498/images/gender-f.png">
					</a>
				</td>
				<td>75,379</td>
				<td>63,105</td>
				<td>9,707</td>
				<td class="r">
											<a href="/search/user?country=ca"><img class="leaderboard_flags" src="https://static.virtuagym.com/v29521498/images/flags/ca.png"></a>
									</td>
			</tr>
								<tr>
				<td class="l">68.</td>
				<td class="l_pic">
					<a href="/user/hamzadeniz">
						<div class="profile_circle_s">
							<img src="https://static.virtuagym.com/v29522/thumb/userpic/s//images/default-profile-picture-male.jpg" width="38" height="38">
						</div>
					</a>
				</td>
				<td class="l_p_link">
					<a href="/user/hamzadeniz">
						Hamza Deniz
						<img src="https://static.virtuagym.com/v29521498/images/gender-m.png">
					</a>
				</td>
				<td>75,000</td>
				<td>92,833</td>
				<td>11,331</td>
				<td class="r">
									</td>
			</tr>
								<tr style="background-color:#f7f7f7;">
				<td class="l">69.</td>
				<td class="l_pic">
					<a href="/user/elankford">
						<div class="profile_circle_s">
							<img src="https://static.virtuagym.com/v29522/thumb/userpic/s/c165f3800f529d152b7b6654f03f714083f5.jpg" width="38" height="38">
						</div>
					</a>
				</td>
				<td class="l_p_link">
					<a href="/user/elankford">
						EDWARD LANKFORD
						<img src="https://static.virtuagym.com/v29521498/images/gender-m.png">
					</a>
				</td>
				<td>74,627</td>
				<td>56,008</td>
				<td>9,936</td>
				<td class="r">
											<a href="/search/user?country=us"><img class="leaderboard_flags" src="https://static.virtuagym.com/v29521498/images/flags/us.png"></a>
									</td>
			</tr>
								<tr>
				<td class="l">70.</td>
				<td class="l_pic">
					<a href="/user/ionecorbeel">
						<div class="profile_circle_s">
							<img src="https://static.virtuagym.com/v29522/thumb/userpic/s//images/default-profile-picture-female.jpg" width="38" height="38">
						</div>
					</a>
				</td>
				<td class="l_p_link">
					<a href="/user/ionecorbeel">
						Ione Corbeel
						<img src="https://static.virtuagym.com/v29521498/images/gender-f.png">
					</a>
				</td>
				<td>74,558</td>
				<td>97,849</td>
				<td>11,911</td>
				<td class="r">
											<a href="/search/user?country=be"><img class="leaderboard_flags" src="https://static.virtuagym.com/v29521498/images/flags/be.png"></a>
									</td>
			</tr>
								<tr style="background-color:#f7f7f7;">
				<td class="l">71.</td>
				<td class="l_pic">
					<a href="/user/kellyvanlangendonck">
						<div class="profile_circle_s">
							<img src="https://static.virtuagym.com/v29522/thumb/userpic/s/7e386b62e395fee10594cb4947755ee3aef1.jpg" width="38" height="38">
						</div>
					</a>
				</td>
				<td class="l_p_link">
					<a href="/user/kellyvanlangendonck">
						Kelly Van Langendonck
						<img src="https://static.virtuagym.com/v29521498/images/gender-f.png">
					</a>
				</td>
				<td>74,093</td>
				<td>74,548</td>
				<td>13,344</td>
				<td class="r">
											<a href="/search/user?country=be"><img class="leaderboard_flags" src="https://static.virtuagym.com/v29521498/images/flags/be.png"></a>
									</td>
			</tr>
								<tr>
				<td class="l">72.</td>
				<td class="l_pic">
					<a href="/user/antoniazoutman">
						<div class="profile_circle_s">
							<img src="https://static.virtuagym.com/v29522/thumb/userpic/s//images/default-profile-picture-female.jpg" width="38" height="38">
						</div>
					</a>
				</td>
				<td class="l_p_link">
					<a href="/user/antoniazoutman">
						Annet Zoutman
						<img src="https://static.virtuagym.com/v29521498/images/gender-f.png">
					</a>
				</td>
				<td>73,444</td>
				<td>63,203</td>
				<td>15,823</td>
				<td class="r">
											<a href="/search/user?country=nl"><img class="leaderboard_flags" src="https://static.virtuagym.com/v29521498/images/flags/nl.png"></a>
									</td>
			</tr>
								<tr style="background-color:#f7f7f7;">
				<td class="l">73.</td>
				<td class="l_pic">
					<a href="/user/gailsmith73">
						<div class="profile_circle_s">
							<img src="https://static.virtuagym.com/v29522/thumb/userpic/s/55d6c1ea8c72b61b0121325e2c17b1b6d9e8.jpg" width="38" height="38">
						</div>
					</a>
				</td>
				<td class="l_p_link">
					<a href="/user/gailsmith73">
						gail smith
						<img src="https://static.virtuagym.com/v29521498/images/gender-f.png">
					</a>
				</td>
				<td>72,725</td>
				<td>50,905</td>
				<td>13,545</td>
				<td class="r">
											<a href="/search/user?country=gb"><img class="leaderboard_flags" src="https://static.virtuagym.com/v29521498/images/flags/gb.png"></a>
									</td>
			</tr>
								<tr>
				<td class="l">74.</td>
				<td class="l_pic">
					<a href="/user/medi73">
						<div class="profile_circle_s">
							<img src="https://static.virtuagym.com/v29522/thumb/userpic/s/3366ac5bb6571fa317ea7e3615881bc20925.jpg" width="38" height="38">
						</div>
					</a>
				</td>
				<td class="l_p_link">
					<a href="/user/medi73">
						Medi73
						<img src="https://static.virtuagym.com/v29521498/images/gender-f.png">
					</a>
				</td>
				<td>72,403</td>
				<td>46,414</td>
				<td>11,063</td>
				<td class="r">
											<a href="/search/user?country=nl"><img class="leaderboard_flags" src="https://static.virtuagym.com/v29521498/images/flags/nl.png"></a>
									</td>
			</tr>
								<tr style="background-color:#f7f7f7;">
				<td class="l">75.</td>
				<td class="l_pic">
					<a href="/user/saulo-alves">
						<div class="profile_circle_s">
							<img src="https://static.virtuagym.com/v29522/thumb/userpic/s/7d663582fa3f35ace1028051be8cc05ee101.jpg" width="38" height="38">
						</div>
					</a>
				</td>
				<td class="l_p_link">
					<a href="/user/saulo-alves">
						Saulo Alves
						<img src="https://static.virtuagym.com/v29521498/images/gender-m.png">
					</a>
				</td>
				<td>72,102</td>
				<td>54,527</td>
				<td>8,558</td>
				<td class="r">
											<a href="/search/user?country=br"><img class="leaderboard_flags" src="https://static.virtuagym.com/v29521498/images/flags/br.png"></a>
									</td>
			</tr>
								<tr>
				<td class="l">76.</td>
				<td class="l_pic">
					<a href="/user/eveadam">
						<div class="profile_circle_s">
							<img src="https://static.virtuagym.com/v29522/thumb/userpic/s/2bfcf25ff4a64238dc2d123c6cdd95ceeb3e.jpg" width="38" height="38">
						</div>
					</a>
				</td>
				<td class="l_p_link">
					<a href="/user/eveadam">
						Eve Adam
						<img src="https://static.virtuagym.com/v29521498/images/gender-f.png">
					</a>
				</td>
				<td>71,961</td>
				<td>78,250</td>
				<td>10,878</td>
				<td class="r">
											<a href="/search/user?country=de"><img class="leaderboard_flags" src="https://static.virtuagym.com/v29521498/images/flags/de.png"></a>
									</td>
			</tr>
								<tr style="background-color:#f7f7f7;">
				<td class="l">77.</td>
				<td class="l_pic">
					<a href="/user/uilames">
						<div class="profile_circle_s">
							<img src="https://static.virtuagym.com/v29522/thumb/userpic/s/4a08ccea573d9dd57ad378cb3b1405afb1d8.jpg" width="38" height="38">
						</div>
					</a>
				</td>
				<td class="l_p_link">
					<a href="/user/uilames">
						Uilames
						<img src="https://static.virtuagym.com/v29521498/images/gender-m.png">
					</a>
				</td>
				<td>71,948</td>
				<td>52,656</td>
				<td>4,949</td>
				<td class="r">
											<a href="/search/user?country=br"><img class="leaderboard_flags" src="https://static.virtuagym.com/v29521498/images/flags/br.png"></a>
									</td>
			</tr>
								<tr>
				<td class="l">78.</td>
				<td class="l_pic">
					<a href="/user/wmteeuwen">
						<div class="profile_circle_s">
							<img src="https://static.virtuagym.com/v29522/thumb/userpic/s//images/default-profile-picture-female.jpg" width="38" height="38">
						</div>
					</a>
				</td>
				<td class="l_p_link">
					<a href="/user/wmteeuwen">
						Willeke Teeuwen
						<img src="https://static.virtuagym.com/v29521498/images/gender-f.png">
					</a>
				</td>
				<td>71,898</td>
				<td>48,083</td>
				<td>6,175</td>
				<td class="r">
											<a href="/search/user?country=nl"><img class="leaderboard_flags" src="https://static.virtuagym.com/v29521498/images/flags/nl.png"></a>
									</td>
			</tr>
								<tr style="background-color:#f7f7f7;">
				<td class="l">79.</td>
				<td class="l_pic">
					<a href="/user/mohamed-hussein-mohamed">
						<div class="profile_circle_s">
							<img src="https://static.virtuagym.com/v29522/thumb/userpic/s/27b9f0b6bcc3dc790a25c326af9505def76f.jpg" width="38" height="38">
						</div>
					</a>
				</td>
				<td class="l_p_link">
					<a href="/user/mohamed-hussein-mohamed">
						Mohamed Hussein
						<img src="https://static.virtuagym.com/v29521498/images/gender-m.png">
					</a>
				</td>
				<td>71,835</td>
				<td>60,035</td>
				<td>10,871</td>
				<td class="r">
											<a href="/search/user?country=eg"><img class="leaderboard_flags" src="https://static.virtuagym.com/v29521498/images/flags/eg.png"></a>
									</td>
			</tr>
								<tr>
				<td class="l">80.</td>
				<td class="l_pic">
					<a href="/user/lolymaus2">
						<div class="profile_circle_s">
							<img src="https://static.virtuagym.com/v29522/thumb/userpic/s//images/default-profile-picture-female.jpg" width="38" height="38">
						</div>
					</a>
				</td>
				<td class="l_p_link">
					<a href="/user/lolymaus2">
						Carola Schmid
						<img src="https://static.virtuagym.com/v29521498/images/gender-f.png">
					</a>
				</td>
				<td>71,760</td>
				<td>42,684</td>
				<td>12,738</td>
				<td class="r">
											<a href="/search/user?country=de"><img class="leaderboard_flags" src="https://static.virtuagym.com/v29521498/images/flags/de.png"></a>
									</td>
			</tr>
								<tr style="background-color:#f7f7f7;">
				<td class="l">81.</td>
				<td class="l_pic">
					<a href="/user/pamirvjwx">
						<div class="profile_circle_s">
							<img src="https://static.virtuagym.com/v29522/thumb/userpic/s/9a5669c9480fb86c7c0c6df7c98c98dc340b.jpg" width="38" height="38">
						</div>
					</a>
				</td>
				<td class="l_p_link">
					<a href="/user/pamirvjwx">
						Muzaffer Pamir Özaltan
						<img src="https://static.virtuagym.com/v29521498/images/gender-m.png">
					</a>
				</td>
				<td>71,595</td>
				<td>48,383</td>
				<td>6,570</td>
				<td class="r">
									</td>
			</tr>
								<tr>
				<td class="l">82.</td>
				<td class="l_pic">
					<a href="/user/janma">
						<div class="profile_circle_s">
							<img src="https://static.virtuagym.com/v29522/thumb/userpic/s/5eecf61b66d656944b4b87bfdd630b4f9e10.jpg" width="38" height="38">
						</div>
					</a>
				</td>
				<td class="l_p_link">
					<a href="/user/janma">
						Jan Ma
						<img src="https://static.virtuagym.com/v29521498/images/gender-m.png">
					</a>
				</td>
				<td>71,369</td>
				<td>55,506</td>
				<td>7,520</td>
				<td class="r">
											<a href="/search/user?country=de"><img class="leaderboard_flags" src="https://static.virtuagym.com/v29521498/images/flags/de.png"></a>
									</td>
			</tr>
								<tr style="background-color:#f7f7f7;">
				<td class="l">83.</td>
				<td class="l_pic">
					<a href="/user/sofiane38">
						<div class="profile_circle_s">
							<img src="https://static.virtuagym.com/v29522/thumb/userpic/s//images/default-profile-picture-male.jpg" width="38" height="38">
						</div>
					</a>
				</td>
				<td class="l_p_link">
					<a href="/user/sofiane38">
						sofiane38
						<img src="https://static.virtuagym.com/v29521498/images/gender-m.png">
					</a>
				</td>
				<td>71,178</td>
				<td>58,653</td>
				<td>6,415</td>
				<td class="r">
											<a href="/search/user?country=fr"><img class="leaderboard_flags" src="https://static.virtuagym.com/v29521498/images/flags/fr.png"></a>
									</td>
			</tr>
								<tr>
				<td class="l">84.</td>
				<td class="l_pic">
					<a href="/user/pamriddle">
						<div class="profile_circle_s">
							<img src="https://static.virtuagym.com/v29522/thumb/userpic/s/441b5448799d1d4fe4b34d60b6d640f160dc.jpg" width="38" height="38">
						</div>
					</a>
				</td>
				<td class="l_p_link">
					<a href="/user/pamriddle">
						Pam Riddle
						<img src="https://static.virtuagym.com/v29521498/images/gender-f.png">
					</a>
				</td>
				<td>70,970</td>
				<td>35,154</td>
				<td>11,121</td>
				<td class="r">
											<a href="/search/user?country=us"><img class="leaderboard_flags" src="https://static.virtuagym.com/v29521498/images/flags/us.png"></a>
									</td>
			</tr>
								<tr style="background-color:#f7f7f7;">
				<td class="l">85.</td>
				<td class="l_pic">
					<a href="/user/renateuden">
						<div class="profile_circle_s">
							<img src="https://static.virtuagym.com/v29522/thumb/userpic/s/c7f1c511ada8542370acb14aa9eee34a0465.jpg" width="38" height="38">
						</div>
					</a>
				</td>
				<td class="l_p_link">
					<a href="/user/renateuden">
						Renate de Heus
						<img src="https://static.virtuagym.com/v29521498/images/gender-f.png">
					</a>
				</td>
				<td>70,901</td>
				<td>88,752</td>
				<td>13,630</td>
				<td class="r">
											<a href="/search/user?country=nl"><img class="leaderboard_flags" src="https://static.virtuagym.com/v29521498/images/flags/nl.png"></a>
									</td>
			</tr>
								<tr>
				<td class="l">86.</td>
				<td class="l_pic">
					<a href="/user/lisamariesafc">
						<div class="profile_circle_s">
							<img src="https://static.virtuagym.com/v29522/thumb/userpic/s/0521799f37c4c02fda00e8e5b2dca3a1d726.jpg" width="38" height="38">
						</div>
					</a>
				</td>
				<td class="l_p_link">
					<a href="/user/lisamariesafc">
						Lisa-Marie Button
						<img src="https://static.virtuagym.com/v29521498/images/gender-f.png">
					</a>
				</td>
				<td>70,066</td>
				<td>35,408</td>
				<td>9,348</td>
				<td class="r">
											<a href="/search/user?country=gb"><img class="leaderboard_flags" src="https://static.virtuagym.com/v29521498/images/flags/gb.png"></a>
									</td>
			</tr>
								<tr style="background-color:#f7f7f7;">
				<td class="l">87.</td>
				<td class="l_pic">
					<a href="/user/bethrayner">
						<div class="profile_circle_s">
							<img src="https://static.virtuagym.com/v29522/thumb/userpic/s/1b727b74e81c9274bcecaddfc2248cb3e032.jpg" width="38" height="38">
						</div>
					</a>
				</td>
				<td class="l_p_link">
					<a href="/user/bethrayner">
						bethrayner
						<img src="https://static.virtuagym.com/v29521498/images/gender-f.png">
					</a>
				</td>
				<td>70,032</td>
				<td>37,724</td>
				<td>9,140</td>
				<td class="r">
											<a href="/search/user?country=gb"><img class="leaderboard_flags" src="https://static.virtuagym.com/v29521498/images/flags/gb.png"></a>
									</td>
			</tr>
								<tr>
				<td class="l">88.</td>
				<td class="l_pic">
					<a href="/user/robertbaines">
						<div class="profile_circle_s">
							<img src="https://static.virtuagym.com/v29522/thumb/userpic/s/a122c801073864cbcb9b785211dfe4c22e4a.jpg" width="38" height="38">
						</div>
					</a>
				</td>
				<td class="l_p_link">
					<a href="/user/robertbaines">
						Rob Baines
						<img src="https://static.virtuagym.com/v29521498/images/gender-m.png">
					</a>
				</td>
				<td>69,775</td>
				<td>97,127</td>
				<td>10,331</td>
				<td class="r">
											<a href="/search/user?country=gb"><img class="leaderboard_flags" src="https://static.virtuagym.com/v29521498/images/flags/gb.png"></a>
									</td>
			</tr>
								<tr style="background-color:#f7f7f7;">
				<td class="l">89.</td>
				<td class="l_pic">
					<a href="/user/jfitbyjessicaloftis">
						<div class="profile_circle_s">
							<img src="https://static.virtuagym.com/v29522/thumb/userpic/s/dbd38d3ce3f9f161e6c528e0781f6cee9184.jpg" width="38" height="38">
						</div>
					</a>
				</td>
				<td class="l_p_link">
					<a href="/user/jfitbyjessicaloftis">
						Jessica Loftis
						<img src="https://static.virtuagym.com/v29521498/images/gender-f.png">
					</a>
				</td>
				<td>69,759</td>
				<td>44,961</td>
				<td>10,006</td>
				<td class="r">
											<a href="/search/user?country=us"><img class="leaderboard_flags" src="https://static.virtuagym.com/v29521498/images/flags/us.png"></a>
									</td>
			</tr>
								<tr>
				<td class="l">90.</td>
				<td class="l_pic">
					<a href="/user/franckdao">
						<div class="profile_circle_s">
							<img src="https://static.virtuagym.com/v29522/thumb/userpic/s//images/default-profile-picture-male.jpg" width="38" height="38">
						</div>
					</a>
				</td>
				<td class="l_p_link">
					<a href="/user/franckdao">
						franckdao
						<img src="https://static.virtuagym.com/v29521498/images/gender-m.png">
					</a>
				</td>
				<td>69,530</td>
				<td>98,057</td>
				<td>11,845</td>
				<td class="r">
											<a href="/search/user?country=us"><img class="leaderboard_flags" src="https://static.virtuagym.com/v29521498/images/flags/us.png"></a>
									</td>
			</tr>
								<tr style="background-color:#f7f7f7;">
				<td class="l">91.</td>
				<td class="l_pic">
					<a href="/user/malbert5">
						<div class="profile_circle_s">
							<img src="https://static.virtuagym.com/v29522/thumb/userpic/s/50ac12e7aa40222371063554eff1a561a189.jpg" width="38" height="38">
						</div>
					</a>
				</td>
				<td class="l_p_link">
					<a href="/user/malbert5">
						m.albert5
						<img src="https://static.virtuagym.com/v29521498/images/gender-m.png">
					</a>
				</td>
				<td>69,412</td>
				<td>75,519</td>
				<td>6,527</td>
				<td class="r">
											<a href="/search/user?country=es"><img class="leaderboard_flags" src="https://static.virtuagym.com/v29521498/images/flags/es.png"></a>
									</td>
			</tr>
								<tr>
				<td class="l">92.</td>
				<td class="l_pic">
					<a href="/user/rich-m">
						<div class="profile_circle_s">
							<img src="https://static.virtuagym.com/v29522/thumb/userpic/s/7de7e909e60261def009d3c1b24bb57d846b.jpg" width="38" height="38">
						</div>
					</a>
				</td>
				<td class="l_p_link">
					<a href="/user/rich-m">
						Richard Mitchell
						<img src="https://static.virtuagym.com/v29521498/images/gender-f.png">
					</a>
				</td>
				<td>69,017</td>
				<td>51,899</td>
				<td>9,067</td>
				<td class="r">
											<a href="/search/user?country=gb"><img class="leaderboard_flags" src="https://static.virtuagym.com/v29521498/images/flags/gb.png"></a>
									</td>
			</tr>
								<tr style="background-color:#f7f7f7;">
				<td class="l">93.</td>
				<td class="l_pic">
					<a href="/user/luciaagustino">
						<div class="profile_circle_s">
							<img src="https://static.virtuagym.com/v29522/thumb/userpic/s//images/default-profile-picture-male.jpg" width="38" height="38">
						</div>
					</a>
				</td>
				<td class="l_p_link">
					<a href="/user/luciaagustino">
						lucia.agustino
						<img src="https://static.virtuagym.com/v29521498/images/gender-m.png">
					</a>
				</td>
				<td>68,862</td>
				<td>33,368</td>
				<td>5,596</td>
				<td class="r">
											<a href="/search/user?country=es"><img class="leaderboard_flags" src="https://static.virtuagym.com/v29521498/images/flags/es.png"></a>
									</td>
			</tr>
								<tr>
				<td class="l">94.</td>
				<td class="l_pic">
					<a href="/user/astefanelli">
						<div class="profile_circle_s">
							<img src="https://static.virtuagym.com/v29522/thumb/userpic/s//images/default-profile-picture-male.jpg" width="38" height="38">
						</div>
					</a>
				</td>
				<td class="l_p_link">
					<a href="/user/astefanelli">
						a_stefanelli
						<img src="https://static.virtuagym.com/v29521498/images/gender-m.png">
					</a>
				</td>
				<td>68,595</td>
				<td>48,271</td>
				<td>7,603</td>
				<td class="r">
											<a href="/search/user?country=ch"><img class="leaderboard_flags" src="https://static.virtuagym.com/v29521498/images/flags/ch.png"></a>
									</td>
			</tr>
								<tr style="background-color:#f7f7f7;">
				<td class="l">95.</td>
				<td class="l_pic">
					<a href="/user/housetamy40oe1g">
						<div class="profile_circle_s">
							<img src="https://static.virtuagym.com/v29522/thumb/userpic/s/9c19895af93747c730f4fb805f51190df36f.jpg" width="38" height="38">
						</div>
					</a>
				</td>
				<td class="l_p_link">
					<a href="/user/housetamy40oe1g">
						Tamara Mansilla
						<img src="https://static.virtuagym.com/v29521498/images/gender-f.png">
					</a>
				</td>
				<td>68,486</td>
				<td>43,821</td>
				<td>10,718</td>
				<td class="r">
											<a href="/search/user?country=es"><img class="leaderboard_flags" src="https://static.virtuagym.com/v29521498/images/flags/es.png"></a>
									</td>
			</tr>
								<tr>
				<td class="l">96.</td>
				<td class="l_pic">
					<a href="/user/donkeybabe">
						<div class="profile_circle_s">
							<img src="https://static.virtuagym.com/v29522/thumb/userpic/s/9d0f66ea7078bdb9cbe242f20e179fc725ef.jpg" width="38" height="38">
						</div>
					</a>
				</td>
				<td class="l_p_link">
					<a href="/user/donkeybabe">
						Anthea Mcleod
						<img src="https://static.virtuagym.com/v29521498/images/gender-f.png">
					</a>
				</td>
				<td>67,958</td>
				<td>43,531</td>
				<td>10,722</td>
				<td class="r">
											<a href="/search/user?country=gb"><img class="leaderboard_flags" src="https://static.virtuagym.com/v29521498/images/flags/gb.png"></a>
									</td>
			</tr>
								<tr style="background-color:#f7f7f7;">
				<td class="l">97.</td>
				<td class="l_pic">
					<a href="/user/franklin85">
						<div class="profile_circle_s">
							<img src="https://static.virtuagym.com/v29522/thumb/userpic/s/d18ae0192284a3ce1dd90ee26acd88b5813c.jpg" width="38" height="38">
						</div>
					</a>
				</td>
				<td class="l_p_link">
					<a href="/user/franklin85">
						Serena
						<img src="https://static.virtuagym.com/v29521498/images/gender-f.png">
					</a>
				</td>
				<td>66,825</td>
				<td>60,623</td>
				<td>10,324</td>
				<td class="r">
											<a href="/search/user?country=nz"><img class="leaderboard_flags" src="https://static.virtuagym.com/v29521498/images/flags/nz.png"></a>
									</td>
			</tr>
								<tr>
				<td class="l">98.</td>
				<td class="l_pic">
					<a href="/user/edeames">
						<div class="profile_circle_s">
							<img src="https://static.virtuagym.com/v29522/thumb/userpic/s/85597ed3b947f182531e744afba3eda009a1.jpg" width="38" height="38">
						</div>
					</a>
				</td>
				<td class="l_p_link">
					<a href="/user/edeames">
						Lucas Edeames
						<img src="https://static.virtuagym.com/v29521498/images/gender-m.png">
					</a>
				</td>
				<td>66,747</td>
				<td>41,845</td>
				<td>5,307</td>
				<td class="r">
											<a href="/search/user?country=br"><img class="leaderboard_flags" src="https://static.virtuagym.com/v29521498/images/flags/br.png"></a>
									</td>
			</tr>
								<tr style="background-color:#f7f7f7;">
				<td class="l">99.</td>
				<td class="l_pic">
					<a href="/user/bayronjobing">
						<div class="profile_circle_s">
							<img src="https://static.virtuagym.com/v29522/thumb/userpic/s/1a699f49ece7363c4a9ce970f7376f2b58aa.jpg" width="38" height="38">
						</div>
					</a>
				</td>
				<td class="l_p_link">
					<a href="/user/bayronjobing">
						Bayron Jobing
						<img src="https://static.virtuagym.com/v29521498/images/gender-m.png">
					</a>
				</td>
				<td>66,650</td>
				<td>54,372</td>
				<td>10,418</td>
				<td class="r">
											<a href="/search/user?country=nl"><img class="leaderboard_flags" src="https://static.virtuagym.com/v29521498/images/flags/nl.png"></a>
									</td>
			</tr>
								<tr>
				<td class="l">100.</td>
				<td class="l_pic">
					<a href="/user/stacy-pendleton">
						<div class="profile_circle_s">
							<img src="https://static.virtuagym.com/v29522/thumb/userpic/s/04cb17be6a46f8a89c1e3a157986a5786d81.jpg" width="38" height="38">
						</div>
					</a>
				</td>
				<td class="l_p_link">
					<a href="/user/stacy-pendleton">
						Stacy Pendleton
						<img src="https://static.virtuagym.com/v29521498/images/gender-f.png">
					</a>
				</td>
				<td>66,457</td>
				<td>29,626</td>
				<td>7,990</td>
				<td class="r">
											<a href="/search/user?country=us"><img class="leaderboard_flags" src="https://static.virtuagym.com/v29521498/images/flags/us.png"></a>
									</td>
			</tr>
						</tbody></table>

            </div>

            <!--end::Portlet-->


        </div>

    </div>

</div>
@endsection
