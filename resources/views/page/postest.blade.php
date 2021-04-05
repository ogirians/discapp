@extends('layout/main')
@section('container')
@php
$cd = $dm-$dl;
$ci = $im-$il;
$cs = $sm-$sl;
$cc = $cm-$cl;
$tm = $dm+$im+$sm+$cm+$bm;
$tl = $dl+$il+$sl+$cl+$bl;
@endphp
<div class="container" style="margin-top: 30px; margin-bottom: 20px;">
	<div class="jumbotron" id="printpage" style="background-color: #FFF; width: 100%;">
		<div class="page-header">
			<div class="pull-left">
				<p style="font-weight: bold;">Hasil DISC TEST :</p>
			</div>
			<div class="pull-right">
				<p style="font-weight: bold;" id="tanggal">{{date('d')}}, {{date('M')}}, {{date('Y')}}</p>
				<button class="btn btn-success" id="btn-print">Cetak <i class="fa fa-print"></i></button>
			</div>

			<div class="clearfix"></div>
		</div>
		<hr>
		<div class="row"> 
			<div class="col-sm-4"><p class="lead">Nama : {{$nama}}</p></div>
			<div class="col-sm-2"><p class="lead">Usia : {{$usia}}</p></div>
			<div class="col-sm-3"><p class="lead">Jenis Kelamin : {{$j_kel}}</p></div>
			<div class="col-sm-3"><p class="lead">Email : {{$email}}</p></div>
		</div>
		<table class="table table-bordered table-hover" style="margin-top: 20px;">
			<thead>
				<tr bgcolor="#F3EEEE">
					<th>Line</th>
					<th>D</th>
					<th>I</th>
					<th>S</th>
					<th>C</th>
					<th>*</th>
					<th>Total</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th scope="row">MOST</th>
					<td>{{$dm}}</td>
					<td>{{$im}}</td>
					<td>{{$sm}}</td>
					<td>{{$cm}}</td>
					<td>{{$bm}}</td>
					<td>{{$tm}}</td>
				</tr>
				<tr>
					<th scope="row">LEAST</th>
					<td>{{$dl}}</td>
					<td>{{$il}}</td>
					<td>{{$sl}}</td>
					<td>{{$cl}}</td>
					<td>{{$bl}}</td>
					<td>{{$tl}}</td>
				</tr>
				<tr>
					<th scope="row">CHANGE</th>
					<td>{{$cd}}</td>
					<td>{{$ci}}</td>
					<td>{{$cs}}</td>
					<td>{{$cc}}</td>
					<td bgcolor="#E8DFDF"></td>
					<td bgcolor="#E8DFDF"></td>
				</tr>           
			</tbody>
		</table>

		<div class="row" style="margin-top: 50px;">
			<div class="col-sm-4" style="text-align: center;">
				<p style="font-weight: bold; font-size: 20px;">MOST</p>
				<canvas id="chart1"></canvas>
			</div>
			<div class="col-sm-4" style="text-align: center;">
				<p style="font-weight: bold; font-size: 20px;">LEAST</p>
				<canvas id="chart2"></canvas>
			</div>
			<div class="col-sm-4" style="text-align: center;">
				<p style="font-weight: bold; font-size: 20px;">CHANGE</p>
				<canvas id="chart3"></canvas>
			</div>
		</div>


		<div class="row" style="margin-top: 50px;">
			<div class="col-sm-6">
				<hr>
				<h6 style="color: #9A9797;">ADAPTED</h6>
				<p style="font-weight: bold; font-size: 20px;">MOST</p>
				<p style="font-weight: bold;" id="nilaival">
				@foreach($mptype as $nilai)
			     {{$nilai}}
				@endforeach
			    type Person</p>

			    @if (count($mptype) < 2)
					    @if ($mptype[0] == "C")
					    <!--C-->
						<ul style="list-style-type: square; color: #888787;">
							<li class="deskripsi"><p>Fears:</p> criticism and being wrong; strong displays of emotion</li>
							<li><b>values:</b> quality and accuracy</li>
							<li><b>Overuses:</b> analysis, restraint</li>
							<li>Influences others by: logic, exacting standards</li>
							<li><b>In conflict:</b> focuses on logic and objectivity; overpowers with facts</li>
							<li><b>Could improve effectiveness through:</b> acknowledging others’ feelings; looking beyond data</li>
							<li><b>DiSC Classic patterns:</b> Objective Thinker, Perfectionist, Practitioner</li>
						</ul>

						@elseif ($mptype[0] == "D")
						<!--D-->
						<ul style="list-style-type: square; color: #888787;">
							<li><b>fears:</b> being seen as vulnerable or being taken advantage of</li>
							<li><b>values:</b> competency, action, concrete results, personal freedom, and challenges</li>
							<li><b>Overuses:</b> the need to win, resulting in win/lose situations</li>
							<li>Influences others by: assertiveness, insistence, competition</li>
							<li><b>In conflict:</b> speaks up about problems; looks to even the score</li>
							<li><b>Could improve effectiveness through:</b> patience, empathy</li>
							<li><b>DiSC Classic patterns:</b> Objective Thinker, Perfectionist, Practitioner</li>
						</ul>	

						@elseif ($mptype[0] == "S")
						<!--S-->
						<ul style="list-style-type: square; color: #888787;">
							<li><b>fears:</b> change, loss of stability, offending others, letting people down</li>
							<li><b>values:</b> loyalty, helping others, security</li>
							<li><b>Overuses:</b> modesty, passive resistance, compromise</li>
																							
							<li>Influences others by: accommodation, consistent performance	</li>
							<li><b>In conflict:</b> listens to others’ perspectives; keeps their own needs to themselves</li>
							<li><b>Could improve effectiveness through:</b> displaying more self-confidence, revealing their true feelings DiSC Classic patterns: Specialist, Achiever, Agent, Investigator</li>
						</ul>

						@elseif ($mptype[0] == "I")
						<!--I-->
						<ul style="list-style-type: square; color: #888787;">
							<li><b>Fears:</b> loss of influence, disapproval, being ignored, rejection</li>
							<li><b>values:</b> coaching and counseling, freedom of expression, democratic relationships</li>
							<li><b>Overuses:</b> optimism, praise</li>
																							
							<li><b>Influences others through:</b> charm, optimism, energy</li>
							<li><b>In conflict:</b> expresses feelings, gossips</li>
							<li><b>Could improve effectiveness through:</b> being more objective, following through on tasksfeelings</li> 
							<li><b>DiSC Classic patterns:</b> Promoter, Persuader, Counselor, Appraiser</li>
						</ul>
						@endif
				@else
						<!--DC-->
						@if ($mptype[0] == "D" && $mptype[1] == "C")
						<ul style="list-style-type: square; color: #888787;">
							<li><b>Traits:</b> can be driven to perfection, takes initiative; diligent, determined, creative, blunt, critical, cool, focused, tough-minded</li>
							<li><b>Goals:</b> independence, personal accomplishment</li>
							<li><b>fears:</b> failure to achieve their own standards</li>
																							
							<li><b>Influences others through:</b> high standards, determination</li>
							<li><b>Overuses:</b> bluntness; sarcastic or condescending attitude</li>
							<li><b>In conflict:</b> sticks up for their own rights; digs in their heels</li> 
							<li>Could increase effectiveness through: warmth, more tactful communication</li>
							<li><b>Leadership qualities:</b> DC-style leaders are often resolute, setting high expectations and speaking up about problems. They tend to be concerned with improving methods and deprocedures. </li>
						</ul>
						
						<!--Di-->
						@elseif ($mptype[0] == "D" && $mptype[1] == "I")
						<ul style="list-style-type: square; color: #888787;">
							<li><b>Traits:</b> dynamic, inquisitive, persuasive, rebellious, restless, entrepreneurial, results oriented, vocal, enthusiastic</li>
							<li><b>Goals:</b> quick action, new opportunities</li>
							<li><b>fears:</b> loss of power or status, invisibility</li>
																							
							<li>Influences others by: charm, bold action</li>
							<li><b>Overuses:</b> impatience, egotism, manipulation</li>
							<li><b>In conflict:</b> addresses issues head-on; may say things they will regret</li> 
							<li><b>Could improve effectiveness through:</b> patience, humility, consideration of others’ ideas</li>
							<li><b>Leadership qualities:</b> Di-style leaders are often pioneering, seeking to stretch boundaries, find opportunities, and achieve results.</li>
						</ul>
				
						<!--CD-->
						@elseif ($mptype[0] == "C" && $mptype[1] == "D")
						<ul style="list-style-type: square; color: #888787;">
							<li><b>Traits:</b> skeptical, determined, questioning, critical thinker, stubborn, cynical, objective, disciplined, systematic, high standards</li>
							<li><b>Goals:</b> efficient results, rational decisions</li>
							<li><b>fears:</b> failure, lack of control</li>
																							
							<li><b>Influences others through:</b> strict standards, resolute approach</li>
							<li><b>Overuses:</b> bluntness, critical attitude</li>
							<li><b>In conflict:</b> sticks up for their own rights; becomes passive-aggressive</li> 
							<li><b>Could improve effectiveness through:</b> cooperation, paying attention to the needs of others</li>
							<li><b>Leadership qualities:</b> CD-style leaders can be questioning, independent leaders who aren’t afraid to challenge the status quo to get better results. They can also be cynical, insensitive leaders who can put a negative spin on everything.</li>
						</ul>
						
						<!--CS-style-->
						@elseif ($mptype[0] == "C" && $mptype[1] == "S")
						<ul style="list-style-type: square; color: #888787;">
							<li><b>Traits:</b> cautious, reflective, stable, orderly, even-tempered, precise, well-prepared, patient, conventional, self-controlled</li>
							<li><b>Goals:</b> stability, reliable outcomes</li>
							<li><b>fears:</b> emotionally charged situations, ambiguity</li>
																							
							<li><b>Influences others through:</b> practicality, attention to detail</li>
							<li><b>Overuses:</b> traditional methods, sense of caution</li>
							<li><b>In conflict:</b> encourages a calm demeanor; avoids emotional situations</li> 
							<li><b>Could improve effectiveness through:</b> showing flexibility, being more decisive, displaying a greater sense of urgency</li>
							<li><b>Leadership qualities:</b> CS-style leaders can be modest and fair-minded, providing reliable outcomes through steadiness and consistency. They can also be rigid, overly cautious, and afraid to move beyond the status quo.</li>
						</ul>
						<!--ID-style-->
						@elseif ($mptype[0] == "I" && $mptype[1] == "D")
						<ul style="list-style-type: square; color: #888787;">
							<li><b>Traits:</b> high-energy, poised, persuasive, open, ambitious, self-promoting, influential, impatient, adventurous, charismatic</li>
							<li><b>Goals:</b> popularity, exciting breakthroughs, prestige</li>
							<li><b>fears:</b> fixed environments, loss of approval or attention</li>
																							
							<li><b>Influences others through:</b> boldness, passion</li>
							<li><b>Overuses:</b> impulsiveness, outspokenness</li>
							<li><b>In conflict:</b> expresses feelings, becomes overly dramatic</li> 
							<li><b>Could improve effectiveness through:</b> focusing on details, patience, listening to others</li>
							<li><b>Leadership qualities:</b> seeks to stretch boundaries, find opportunities, and inspire action in others. Can be perceived as pushy, intimidating, or insincere.</li>
						</ul>
					
						<!--IS-style-->
						@elseif ($mptype[0] == "I" && $mptype[1] == "S")
						<ul style="list-style-type: square; color: #888787;">
							<li><b>Traits:</b> warm, friendly, accepting, collaborative, empathetic, upbeat, deadline-challenged, conflict-averse, cheerful, sociable</li>
							<li><b>Goals:</b> friendship</li>
							<li><b>fears:</b> pressuring others, being disliked</li>
																							
							<li>Influences others by: agreeableness, empathy</li>
							<li><b>Overuses:</b> patience with others, indirect approaches</li>
							<li><b>In conflict:</b> seeks emotional support, dwells on wounded relationships</li> 
							<li>Would increase effectiveness through: acknowledging others’ flaws, confronting problems</li>
							<li><b>Leadership qualities:</b> supportive, respectful, and positive; can also be indirect and conflict-averse.</li>
						</ul>
						<!--SI-style-->
						@elseif ($mptype[0] == "S" && $mptype[1] == "I")
						<ul style="list-style-type: square; color: #888787;">
							<li><b>Traits:</b> collaborative, well-liked, team-spirited, positive, encouraging, conflict-averse, over-extended, approachable, generous, compassionate</li>
							<li><b>Goals:</b> acceptance, close relationships</li>
							<li><b>fears:</b> being forced to pressure others; facing aggression</li>
																							
							<li>Influences others by: showing empathy, being patient</li>
							<li><b>Overuses:</b> kindness, personal connections</li>
							<li><b>In conflict:</b> shows empathy, glosses over problems</li> 
							<li><b>Could improve effectiveness through:</b> saying “no” when necessary; addressing issues</li>
							<li><b>Leadership qualities:</b> Si-style leaders tend to be laid back, patient, and supportive of their staff and colleagues. They sometimes have a hard time confronting problems and acknowledging others’ flaws.</li>
						</ul>
						<!--SC-style-->
						@elseif ($mptype[0] == "S" && $mptype[1] == "C")
						<ul style="list-style-type: square; color: #888787;">
							<li><b>Traits:</b> stable, consistent, predictable, accommodating, patient, inflexible, self-controlled, reliable, thoughtful, soft-spoken</li>
							<li><b>Goals:</b> calm environment, fixed objectives, steady progress</li>
							<li><b>fears:</b> time pressure, uncertainty, chaos</li>
																							
							<li>Influences others by: diplomacy, self-control, consistency</li>
							<li><b>Overuses:</b> willingness to let others lead; humility</li>
							<li><b>In conflict:</b> encourages a calm demeanor; retreats from the conflict</li> 
							<li><b>Could improve effectiveness through:</b> initiating change, speaking up</li>
							<li><b>Leadership qualities:</b> SC-style leaders can be modest and fair-minded, providing reliable outcomes through steadiness and consistency. They can also be rigid, overly cautious, and afraid to move beyond the status quo.</li>
						</ul>

						@else
						<ul style="list-style-type: square; color: #888787;">
							<li>Tidak ditemukan penjelasan tentang tipe ini</li>
						</ul>
						@endif
				@endif
			</div>

			<div class="col-sm-6">
				<hr>
				<h6 style="color: #9A9797;">NATURAL</h6>
				<p style="font-weight: bold; font-size: 20px;">LEAST</p>
			    <p style="font-weight: bold;">
			    @foreach($lptype as $nilai2)
			     {{$nilai2}}
				@endforeach
			    type Person 
			    </p>

			    @if (count($lptype) < 2)
					    @if ($lptype[0] == "C")
					    <!--C-->
						<ul style="list-style-type: square; color: #888787;">
							<li><b>fears:</b> criticism and being wrong; strong displays of emotion</li>
							<li><b>values:</b> quality and accuracy</li>
							<li><b>Overuses:</b> analysis, restraint</li>
							<li>Influences others by: logic, exacting standards</li>
							<li><b>In conflict:</b> focuses on logic and objectivity; overpowers with facts</li>
							<li><b>Could improve effectiveness through:</b> acknowledging others’ feelings; looking beyond data</li>
							<li><b>DiSC Classic patterns:</b> Objective Thinker, Perfectionist, Practitioner</li>
						</ul>

						@elseif ($lptype[0] == "D")
						<!--D-->
						<ul style="list-style-type: square; color: #888787;">
							<li><b>fears:</b> being seen as vulnerable or being taken advantage of</li>
							<li><b>values:</b> competency, action, concrete results, personal freedom, and challenges</li>
							<li><b>Overuses:</b> the need to win, resulting in win/lose situations</li>
							<li>Influences others by: assertiveness, insistence, competition</li>
							<li><b>In conflict:</b> speaks up about problems; looks to even the score</li>
							<li><b>Could improve effectiveness through:</b> patience, empathy</li>
							<li><b>DiSC Classic patterns:</b> Objective Thinker, Perfectionist, Practitioner</li>
						</ul>	

						@elseif ($lptype[0] == "S")
						<!--S-->
						<ul style="list-style-type: square; color: #888787;">
							<li><b>fears:</b> change, loss of stability, offending others, letting people down</li>
							<li><b>values:</b> loyalty, helping others, security</li>
							<li><b>Overuses:</b> modesty, passive resistance, compromise</li>
																							
							<li>Influences others by: accommodation, consistent performance	</li>
							<li><b>In conflict:</b> listens to others’ perspectives; keeps their own needs to themselves</li>
							<li><b>Could improve effectiveness through:</b> displaying more self-confidence, revealing their true feelings DiSC Classic patterns: Specialist, Achiever, Agent, Investigator</li>
						</ul>

						@elseif ($lptype[0] == "I")
						<!--I-->
						<ul style="list-style-type: square; color: #888787;">
							<li><b>Fears</b>: loss of influence, disapproval, being ignored, rejection</li>
							<li><b>values:</b> coaching and counseling, freedom of expression, democratic relationships</li>
							<li><b>Overuses:</b> optimism, praise</li>
																							
							<li><b>Influences others through:</b> charm, optimism, energy</li>
							<li><b>In conflict:</b> expresses feelings, gossips</li>
							<li><b>Could improve effectiveness through:</b> being more objective, following through on tasksfeelings</li> 
							<li><b>DiSC Classic patterns:</b> Promoter, Persuader, Counselor, Appraiser</li>
						</ul>
						@endif
				@else
						<!--DC-->
						@if ($lptype[0] == "D" && $lptype[1] == "C")
						<ul style="list-style-type: square; color: #888787;">
							<li><b>Traits:</b> can be driven to perfection, takes initiative; diligent, determined, creative, blunt, critical, cool, focused, tough-minded</li>
							<li><b>Goals:</b> independence, personal accomplishment</li>
							<li><b>fears:</b> failure to achieve their own standards</li>
																							
							<li><b>Influences others through:</b> high standards, determination</li>
							<li><b>Overuses:</b> bluntness; sarcastic or condescending attitude</li>
							<li><b>In conflict:</b> sticks up for their own rights; digs in their heels</li> 
							<li>Could increase effectiveness through: warmth, more tactful communication</li>
							<li><b>Leadership qualities:</b> DC-style leaders are often resolute, setting high expectations and speaking up about problems. They tend to be concerned with improving methods and procedures. </li>
						</ul>
						
						<!--Di-->
						@elseif ($lptype[0] == "D" && $lptype[1] == "I")
						<ul style="list-style-type: square; color: #888787;">
							<li><b>Traits:</b> dynamic, inquisitive, persuasive, rebellious, restless, entrepreneurial, results oriented, vocal, enthusiastic</li>
							<li><b>Goals:</b> quick action, new opportunities</li>
							<li><b>fears:</b> loss of power or status, invisibility</li>
																							
							<li>Influences others by: charm, bold action</li>
							<li><b>Overuses:</b> impatience, egotism, manipulation</li>
							<li><b>In conflict:</b> addresses issues head-on; may say things they will regret</li> 
							<li><b>Could improve effectiveness through:</b> patience, humility, consideration of others’ ideas</li>
							<li><b>Leadership qualities:</b> Di-style leaders are often pioneering, seeking to stretch boundaries, find opportunities, and achieve results.</li>
						</ul>
				
						<!--CD-->
						@elseif ($lptype[0] == "C" && $lptype[1] == "D")
						<ul style="list-style-type: square; color: #888787;">
							<li><b>Traits:</b> skeptical, determined, questioning, critical thinker, stubborn, cynical, objective, disciplined, systematic, high standards</li>
							<li><b>Goals:</b> efficient results, rational decisions</li>
							<li><b>fears:</b> failure, lack of control</li>
																							
							<li><b>Influences others through:</b> strict standards, resolute approach</li>
							<li><b>Overuses:</b> bluntness, critical attitude</li>
							<li><b>In conflict:</b> sticks up for their own rights; becomes passive-aggressive</li> 
							<li><b>Could improve effectiveness through:</b> cooperation, paying attention to the needs of others</li>
							<li><b>Leadership qualities:</b> CD-style leaders can be questioning, independent leaders who aren’t afraid to challenge the status quo to get better results. They can also be cynical, insensitive leaders who can put a negative spin on everything.</li>
						</ul>
						
						<!--CS-style-->
						@elseif ($lptype[0] == "C" && $lptype[1] == "S")
						<ul style="list-style-type: square; color: #888787;">
							<li><b>Traits:</b> cautious, reflective, stable, orderly, even-tempered, precise, well-prepared, patient, conventional, self-controlled</li>
							<li><b>Goals:</b> stability, reliable outcomes</li>
							<li><b>fears:</b> emotionally charged situations, ambiguity</li>
																							
							<li><b>Influences others through:</b> practicality, attention to detail</li>
							<li><b>Overuses:</b> traditional methods, sense of caution</li>
							<li><b>In conflict:</b> encourages a calm demeanor; avoids emotional situations</li> 
							<li><b>Could improve effectiveness through:</b> showing flexibility, being more decisive, displaying a greater sense of urgency</li>
							<li><b>Leadership qualities:</b> CS-style leaders can be modest and fair-minded, providing reliable outcomes through steadiness and consistency. They can also be rigid, overly cautious, and afraid to move beyond the status quo.</li>
						</ul>
						<!--ID-style-->
						@elseif ($lptype[0] == "I" && $lptype[1] == "D")
						<ul style="list-style-type: square; color: #888787;">
							<li><b>Traits:</b> high-energy, poised, persuasive, open, ambitious, self-promoting, influential, impatient, adventurous, charismatic</li>
							<li><b>Goals:</b> popularity, exciting breakthroughs, prestige</li>
							<li><b>fears:</b> fixed environments, loss of approval or attention</li>
																							
							<li><b>Influences others through:</b> boldness, passion</li>
							<li><b>Overuses:</b> impulsiveness, outspokenness</li>
							<li><b>In conflict:</b> expresses feelings, becomes overly dramatic</li> 
							<li><b>Could improve effectiveness through:</b> focusing on details, patience, listening to others</li>
							<li><b>Leadership qualities:</b> seeks to stretch boundaries, find opportunities, and inspire action in others. Can be perceived as pushy, intimidating, or insincere.</li>
						</ul>
					
						<!--IS-style-->
						@elseif ($lptype[0] == "I" && $lptype[1] == "S")
						<ul style="list-style-type: square; color: #888787;">
							<li><b>Traits:</b> warm, friendly, accepting, collaborative, empathetic, upbeat, deadline-challenged, conflict-averse, cheerful, sociable</li>
							<li><b>Goals:</b> friendship</li>
							<li><b>fears:</b> pressuring others, being disliked</li>
																							
							<li>Influences others by: agreeableness, empathy</li>
							<li><b>Overuses:</b> patience with others, indirect approaches</li>
							<li><b>In conflict:</b> seeks emotional support, dwells on wounded relationships</li> 
							<li>Would increase effectiveness through: acknowledging others’ flaws, confronting problems</li>
							<li><b>Leadership qualities:</b> supportive, respectful, and positive; can also be indirect and conflict-averse.</li>
						</ul>
						<!--SI-style-->
						@elseif ($lptype[0] == "S" && $lptype[1] == "I")
						<ul style="list-style-type: square; color: #888787;">
							<li><b>Traits:</b> collaborative, well-liked, team-spirited, positive, encouraging, conflict-averse, over-extended, approachable, generous, compassionate</li>
							<li><b>Goals:</b> acceptance, close relationships</li>
							<li><b>fears:</b> being forced to pressure others; facing aggression</li>
																							
							<li>Influences others by: showing empathy, being patient</li>
							<li><b>Overuses:</b> kindness, personal connections</li>
							<li><b>In conflict:</b> shows empathy, glosses over problems</li> 
							<li><b>Could improve effectiveness through:</b> saying “no” when necessary; addressing issues</li>
							<li><b>Leadership qualities:</b> Si-style leaders tend to be laid back, patient, and supportive of their staff and colleagues. They sometimes have a hard time confronting problems and acknowledging others’ flaws.</li>
						</ul>
						<!--SC-style-->
						@elseif ($lptype[0] == "S" && $lptype[1] == "C")
						<ul style="list-style-type: square; color: #888787;">
							<li><b>Traits:</b> stable, consistent, predictable, accommodating, patient, inflexible, self-controlled, reliable, thoughtful, soft-spoken</li>
							<li><b>Goals:</b> calm environment, fixed objectives, steady progress</li>
							<li><b>fears:</b> time pressure, uncertainty, chaos</li>
																							
							<li>Influences others by: diplomacy, self-control, consistency</li>
							<li><b>Overuses:</b> willingness to let others lead; humility</li>
							<li><b>In conflict:</b> encourages a calm demeanor; retreats from the conflict</li> 
							<li><b>Could improve effectiveness through:</b> initiating change, speaking up</li>
							<li><b>Leadership qualities:</b> SC-style leaders can be modest and fair-minded, providing reliable outcomes through steadiness and consistency. They can also be rigid, overly cautious, and afraid to move beyond the status quo.</li>
						</ul>

						@else
						<ul style="list-style-type: square; color: #888787;">
							<li>Tidak ditemukan penjelasan tentang tipe ini</li>
						</ul>
						@endif
				@endif
			</div>
	
		</div>
		<div class="row">
			<div class="col-sm-6">
				<p style="font-weight: bold; font-size: 20px;">DESKRIPSI KEPRIPADIAN @foreach($mptype as $nilai)
			     {{$nilai}}
				@endforeach</p>

				 @if (count($mptype) < 2)
					    @if ($mptype[0] == "C")
					    <!--C-->
						<p style="color: #A8A7A7;">C styles are motivated by opportunities to gain knowledge, show their expertise, and produce quality work. They prioritize ensuring accuracy, maintaining stability, and challenging assumptions. They are often described as careful, analytical, systematic, diplomatic, accurate, and tactful. </p>

						@elseif ($mptype[0] == "D")
						<!--D-->
						<p style="color: #A8A7A7;">D styles are motivated by winning, competition, and success. They prioritize taking action, accepting challenges, and achieving results and are often described as direct and demanding, strong-willed, driven, and determined. D styles tend to be outspoken, but can be rather skeptical and questioning of others.</p>

						@elseif ($mptype[0] == "S")
						<!--S-->
						<p style="color: #A8A7A7;">S styles are motivated by cooperation, opportunities to help, and sincere appreciation. They prioritize giving support, collaborating, and maintaining stability and are often described as calm, patient, predictable, deliberate, stable, and consistent. </p>

						@elseif ($mptype[0] == "I")
						<!--I-->
						<p style="color: #A8A7A7;">i styles are motivated by social recognition, group activities, and relationships. They prioritize taking action, collaboration, and expressing enthusiasm and are often described as warm, trusting, optimistic, magnetic, enthusiastic, and convincing.  </p>
						
						@endif
				@else
						<!--DC-->
						@if ($mptype[0] == "D" && $mptype[1] == "C")
						<p style="color: #A8A7A7;">DC styles tend to be diligent, tough-minded, and creative, influencing others through their high standards and determination.  </p>
						
						<!--Di-->
						@elseif ($mptype[0] == "D" && $mptype[1] == "I")
						<p style="color: #A8A7A7;">Di styles tend to be results-oriented, vocal, and enthusiastic, influencing others through their charm and bold action. </p>
				
						<!--CD-->
						@elseif ($mptype[0] == "C" && $mptype[1] == "D")
						<p style="color: #A8A7A7;">CD styles tend to be skeptical, stubborn, and disciplined, influencing others through their strict standards and resolute approach. </p>
						
						<!--CS-style-->
						@elseif ($mptype[0] == "C" && $mptype[1] == "S")
						<p style="color: #A8A7A7;">CS styles tend to be cautious, orderly, and precise, influencing others through their practicality and attention to detail. </p>

						<!--ID-style-->
						@elseif ($mptype[0] == "I" && $mptype[1] == "D")
						<p style="color: #A8A7A7;">iD styles tend to be high-energy, charismatic, and adventurous, influencing others through their boldness and passion.  </p>
					
						<!--IS-style-->
						@elseif ($mptype[0] == "I" && $mptype[1] == "S")
						<p style="color: #A8A7A7;">iS styles tend to be warm, friendly, and sociable, influencing others through their agreeableness and empathy.  </p>

						<!--SI-style-->
						@elseif ($mptype[0] == "S" && $mptype[1] == "I")
						<p style="color: #A8A7A7;">Si styles tend to be generous, approachable, and compassionate, influencing others by showing empathy and patience. </p>

						<!--SC-style-->
						@elseif ($mptype[0] == "S" && $mptype[1] == "C")
						<p style="color: #A8A7A7;">SC styles tend to be accommodating, patient, and reliable, influencing others through diplomacy and self-control. . </p>

						@else
						<ul style="list-style-type: square; color: #888787;">
							<li>Tidak ditemukan penjelasan tentang tipe ini</li>
						</ul>
						@endif
				@endif

			</div>




			<div class="col-sm-6">
				<p style="font-weight: bold; font-size: 20px;">DESKRIPSI KEPRIPADIAN  @foreach($lptype as $nilai2)
			     {{$nilai2}}
				@endforeach</p>
				
				@if (count($lptype) < 2)
					    @if ($lptype[0] == "C")
					    <!--C-->
						<p style="color: #A8A7A7;">C styles are motivated by opportunities to gain knowledge, show their expertise, and produce quality work. They prioritize ensuring accuracy, maintaining stability, and challenging assumptions. They are often described as careful, analytical, systematic, diplomatic, accurate, and tactful. </p>

						@elseif ($lptype[0] == "D")
						<!--D-->
						<p style="color: #A8A7A7;">D styles are motivated by winning, competition, and success. They prioritize taking action, accepting challenges, and achieving results and are often described as direct and demanding, strong-willed, driven, and determined. D styles tend to be outspoken, but can be rather skeptical and questioning of others.</p>

						@elseif ($lptype[0] == "S")
						<!--S-->
						<p style="color: #A8A7A7;">S styles are motivated by cooperation, opportunities to help, and sincere appreciation. They prioritize giving support, collaborating, and maintaining stability and are often described as calm, patient, predictable, deliberate, stable, and consistent. </p>

						@elseif ($lptype[0] == "I")
						<!--I-->
						<p style="color: #A8A7A7;">i styles are motivated by social recognition, group activities, and relationships. They prioritize taking action, collaboration, and expressing enthusiasm and are often described as warm, trusting, optimistic, magnetic, enthusiastic, and convincing.  </p>
						
						@endif
				@else
						<!--DC-->
						@if ($lptype[0] == "D" && $lptype[1] == "C")
						<p style="color: #A8A7A7;">DC styles tend to be diligent, tough-minded, and creative, influencing others through their high standards and determination.  </p>
						
						<!--Di-->
						@elseif ($lptype[0] == "D" && $lptype[1] == "I")
						<p style="color: #A8A7A7;">Di styles tend to be results-oriented, vocal, and enthusiastic, influencing others through their charm and bold action. </p>
				
						<!--CD-->
						@elseif ($lptype[0] == "C" && $lptype[1] == "D")
						<p style="color: #A8A7A7;">CD styles tend to be skeptical, stubborn, and disciplined, influencing others through their strict standards and resolute approach. </p>
						
						<!--CS-style-->
						@elseif ($lptype[0] == "C" && $lptype[1] == "S")
						<p style="color: #A8A7A7;">CS styles tend to be cautious, orderly, and precise, influencing others through their practicality and attention to detail. </p>

						<!--ID-style-->
						@elseif ($lptype[0] == "I" && $lptype[1] == "D")
						<p style="color: #A8A7A7;">iD styles tend to be high-energy, charismatic, and adventurous, influencing others through their boldness and passion.  </p>
					
						<!--IS-style-->
						@elseif ($lptype[0] == "I" && $lptype[1] == "S")
						<p style="color: #A8A7A7;">iS styles tend to be warm, friendly, and sociable, influencing others through their agreeableness and empathy.  </p>

						<!--SI-style-->
						@elseif ($lptype[0] == "S" && $lptype[1] == "I")
						<p style="color: #A8A7A7;">Si styles tend to be generous, approachable, and compassionate, influencing others by showing empathy and patience. </p>

						<!--SC-style-->
						@elseif ($lptype[0] == "S" && $lptype[1] == "C")
						<p style="color: #A8A7A7;">SC styles tend to be accommodating, patient, and reliable, influencing others through diplomacy and self-control. . </p>

						@else
						<ul style="list-style-type: square; color: #888787;">
							<li>Tidak ditemukan penjelasan tentang tipe ini</li>
						</ul>
						@endif
				@endif
			</div>
		</div>
	</div>
</div>

<script type="text/javascript" src="{{asset('/js/Chart.js')}}"></script>

<!-- Chart 1 -->
<script type="text/javascript">
	var ctx = document.getElementById("chart1").getContext('2d');
	var myChart = new Chart(ctx, {
		type: 'line',
		data: {
			labels: ["D", "I", "S", "C"],
			datasets: [{
				data: [{{$dm}}, {{$im}}, {{$sm}}, {{$cm}}],
				fill: false,
				borderColor: '#A947FD',
				borderWidth: 3
			}]
		},
		options: {
			responsive: true,
			legend: {
				display: false
			},
			tooltips: {
				callbacks: {
					label: function(tooltipItem) {
						return tooltipItem.yLabel;
					}
				}
			},
			scales: {
				yAxes: [{
					ticks: {
						beginAtZero:true
					}
				}]
			}
		}
	});
</script>

<!-- Chart 2 -->
<script type="text/javascript">
	var ctx = document.getElementById("chart2").getContext('2d');
	var myChart = new Chart(ctx, {
		type: 'line',
		data: {
			labels: ["D", "I", "S", "C"],
			datasets: [{
				data: [{{$dl}}, {{$il}}, {{$sl}}, {{$cl}}],
				fill: false,
				borderColor: 'green',
				borderWidth: 3
			}]
		},
		options: {
			responsive: true,
			legend: {
				display: false
			},
			tooltips: {
				callbacks: {
					label: function(tooltipItem) {
						return tooltipItem.yLabel;
					}
				}
			},
			scales: {
				yAxes: [{
					ticks: {
						beginAtZero:true
					}
				}]
			}
		}
	});
</script>

<!-- Chart 3 -->
<script type="text/javascript">
	var ctx = document.getElementById("chart3").getContext('2d');
	var myChart = new Chart(ctx, {
		type: 'line',
		data: {
			labels: ["D", "I", "S", "C"],
			datasets: [{
				data: [{{$cd}}, {{$ci}}, {{$cs}}, {{$cc}}],
				fill: false,
				borderColor: '#FC6A30',
				borderWidth: 3
			}]
		},
		options: {
			responsive: true,
			legend: {
				display: false
			},
			tooltips: {
				callbacks: {
					label: function(tooltipItem) {
						return tooltipItem.yLabel;
					}
				}
			},
			scales: {
				yAxes: [{
					ticks: {
						beginAtZero:true
					}
				}]
			}
		}
	});

	$(document).on("click", "#btn-print", function(e){
		e.preventDefault();
		window.print();
	});
</script>
@endsection