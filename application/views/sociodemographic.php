<?php include "language.php"?>
<body>
    <main>                        

        
        <form id='sociodemographicForm' method='post' action="<?php echo site_url('Main/submitSociodemographic')?>"  class='section'>
            <div class="section no-pad-bot" id="index-banner">
                <div class="container">
                    <div class="row center">
                        <div class="col s12 m10 offset-m1 bottom-line">
                            <h3 class="header"><?php echo $lang['questionnaire'];?></h3>
                        </div>
                        
                        <!-- div class="row"> -->
                        <!-- <?php echo validation_errors('<div class="card-panel red lighten-5">','</div>'); ?> -->
                            <!-- 1º quadro - Idade -->
                            <!-- div class="col s12 m12 offset-m-1"> -->
                            <div class="col s12">
                                <div class="card">
                                    <div class="card-image">
                                        <div class="video-container">
                                            <iframe src=<?php echo $lang['video-sociodemografico_idade'];?> frameborder="0" allowfullscreen></iframe> 
                                            <!-- <iframe width="597" height="336" src=<?php echo $lang['video-sociodemografico_idade'];?> frameborder="0" allowfullscreen></iframe> -->
                                            <!-- <iframe width="853" height="480" src="//www.youtube.com/embed/Q8TXgCzxEnw?rel=0" frameborder="0" allowfullscreen></iframe> -->
                                        </div>     
                                        
                                        <div class="card-content">
                                            <p style="font-weight: bold; font-size: 16px;"><?php echo $lang['registerAge'];?></p>
                                        </div>

                                        <div class="container">
                                            <div class="row">
                                            </br></br>
                                                

                                                <div class="input-field col s12 m12 center-align">                                    
                                                    <!-- <select id="idade" name="idade" required="" aria-required="true"> -->
                                                    <select id="idade" name="idade" required="required" class="validate">
                                                        <option value="" disabled selected>Clique aqui</option>
                                                        <option value="18">18</option>   
                                                        <option value="19">19</option>
                                                        <option value="20">20</option>
                                                        <option value="21">21</option>
                                                        <option value="22">22</option>
                                                        <option value="23">23</option>
                                                        <option value="24">24</option>
                                                        <option value="25">25</option>
                                                        <option value="26">26</option>
                                                        <option value="27">27</option>
                                                        <option value="28">28</option>
                                                        <option value="29">29</option>
                                                        <option value="30">30</option>
                                                        <option value="31">31</option>
                                                        <option value="32">32</option>
                                                        <option value="33">33</option>
                                                        <option value="34">34</option> 
                                                        <option value="35">35</option>
                                                        <option value="36">36</option>
                                                        <option value="37">37</option>
                                                        <option value="38">38</option>
                                                        <option value="39">39</option>
                                                        <option value="40">40</option>
                                                        <option value="41">41</option>
                                                        <option value="42">42</option>
                                                        <option value="43">43</option>
                                                        <option value="44">44</option>
                                                        <option value="45">45</option>
                                                        <option value="46">46</option>
                                                        <option value="47">47</option> 
                                                        <option value="48">48</option>
                                                        <option value="49">49</option>
                                                        <option value="50">50</option>
                                                        <option value="51">51</option>
                                                        <option value="52">52</option>
                                                        <option value="53">53</option>
                                                        <option value="54">54</option>
                                                        <option value="55">55</option>
                                                        <option value="56">56</option>
                                                        <option value="57">57</option>
                                                        <option value="58">58</option>
                                                        <option value="59">59</option>
                                                        <option value="60">60</option>
                                                        <option value="61">61</option>
                                                        <option value="62">62</option>
                                                        <option value="63">63</option>
                                                        <option value="64">64</option>
                                                        <option value="65">65</option>
                                                        <option value="66">66</option> 
                                                        <option value="67">67</option>
                                                        <option value="68">68</option>
                                                        <option value="69">69</option>
                                                        <option value="70">70</option>
                                                        <option value="71">71</option>
                                                        <option value="72">72</option>
                                                        <option value="73">73</option>
                                                        <option value="74">74</option>
                                                        <option value="75">75</option>
                                                        <option value="76">76</option>
                                                        <option value="77">77</option>
                                                        <option value="78">78</option>
                                                        <option value="79">79</option>
                                                        <option value="80">80</option>
                                                        <option value="81">81</option>
                                                        <option value="82">82</option>
                                                        <option value="83">83</option>
                                                        <option value="84">84</option>
                                                        <option value="85">85</option>
                                                        <option value="86">86</option>
                                                        <option value="87">87</option>
                                                        <option value="88">88</option>
                                                        <option value="89">89</option>
                                                        <option value="90">90</option>
                                                        <option value="91">91</option>
                                                        <option value="92">92</option>
                                                        <option value="93">93</option>
                                                        <option value="94">94</option>
                                                        <option value="95">95</option>
                                                        <option value="96">96</option>
                                                        <option value="97">97</option>
                                                        <option value="98">98</option>
                                                        <option value="99">99</option>
                                                        <option value="100">100</option>     
                                                    </select>  
                                                    <!-- <label>Images in select</label>  -->

                                                    <script>
                                                        $("select[required]").css({display: "block", height: 0, padding: 0, width: 0, position: 'absolute'});
                                                    </script>
                                                </div>                                          
                                            </div> 
                                        </div>  ´
                                        
                                        <!--                            
                                        <div class="card-action">
                                            
                                            <a href="<?php echo site_url('Main/replyquestionnaire?lang=' . $_SESSION['lang'])?>" class="waves-effect waves-light btn-small indigo modal-trigger"><?php echo $lang['saveAge'];?></a>
                                        </div>    -->
                                            
                                    </div>                            
                                </div>                     
                            </div>   

                            <!-- 2º quadro - Cidade/Estado -->
                            <div class="col s12">
                                <div class="card">
                                    <div class="card-image">
                                        <div class="video-container">
                                        <iframe width="853" height="480" src=<?php echo $lang['video-sociodemografico_cidade_estado'];?> frameborder="0" allowfullscreen></iframe>
                                        </div>         

                                        <div class="card-content">
                                            <p style="font-weight: bold; font-size: 16px;"><?php echo $lang['registerCityState'];?></p>
                                        </div>
                                            
                                        <div class="container">
                                            <div class="row center">
                                                <div class="input-field col s11">
                                                    <!-- <input id="cidade" type="text" class="validate">
                                                    <label for="cidade">Cidade</label> -->

                                                    <i class="mdi-action-account-circle prefix"></i>            
                                                    <input id="cidade" name="cidade" type="text" class="validate" data-length="50" maxlength="50" minlength="3" required="" >
                                                    <label for="cidade">Cidade</label>
                                                </div>
                                            </div>

                                            <div class="row center">
                                                </br></br>
                                                <div class="input-field col s12">                                            
                                                    <!-- <select> -->
                                                    <select id="estado" name="estado" required="required" class="validate" >
                                                        <option value="" disabled selected>Clique aqui</option>
                                                        <option value="AC">AC</option>
                                                        <option value="AL">AL</option>
                                                        <option value="AP">AP</option>
                                                        <option value="AM">AM</option>
                                                        <option value="BA">BA</option>
                                                        <option value="CE">CE</option>
                                                        <option value="DF">DF</option>
                                                        <option value="ES">ES</option>
                                                        <option value="GO">GO</option>
                                                        <option value="MA">MA</option>
                                                        <option value="MT">MT</option>
                                                        <option value="MS">MS</option>
                                                        <option value="MG">MG</option>
                                                        <option value="PA">PA</option>
                                                        <option value="PB">PB</option>
                                                        <option value="PR">PR</option>
                                                        <option value="PE">PE</option> 
                                                        <option value="PI">PI</option>
                                                        <option value="RJ">RJ</option>
                                                        <option value="RN">RN</option>
                                                        <option value="RS">RS</option>
                                                        <option value="RO">RO</option>
                                                        <option value="RR">RR</option>
                                                        <option value="SC">SC</option>
                                                        <option value="SP">SP</option>
                                                        <option value="SE">SE</option>
                                                        <option value="TO">TO</option> 
                                                    </select>  

                                                    <script>
                                                        $("select[required]").css({display: "block", height: 0, padding: 0, width: 0, position: 'absolute'});
                                                    </script>

                                                </div>                                          
                                                
                                            </div> 
                                        </div>                                                            
                                                    
                                    </div>
                                </div>
                            </div>

                            <!-- 3º quadro - Gênero -->
                            <div class="col s12">
                                <div class="card">
                                    <div class="card-image">
                                        <div class="video-container">
                                        <iframe width="853" height="480" src=<?php echo $lang['video-sociodemografico_genero'];?> frameborder="0" allowfullscreen></iframe>
                                        </div>                             

                                        <div class="card-content">
                                            <p style="font-weight: bold; font-size: 16px;"><?php echo $lang['registerSex'];?></p>
                                        </div>   

                                        <div class="container">
                                            <div class="row center">
                                                <!-- <div class="col s6 left-align offset-m3"> -->
                                                <div class="col s11 left-align offset-m1" >
                                                    
                                                    <p>
                                                        <label>
                                                            <input class="with-gap" name="sexo" type="radio" value="Masculino" required="required"/>  
                                                            <span>1- Homem</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input class="with-gap" name="sexo" type="radio"  value="Feminino" required="required"/>
                                                            <span>2- Mulher</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input class="with-gap" name="sexo" type="radio" value="Prefiro nao informar" required="required" />
                                                            <span>3- Prefiro não dizer</span>
                                                        </label>
                                                    </p>
                                                                
                                                    
                                                </div>							
                                            </div>               
                                        </div>
                                        
                                    </div>
                                </div>  
                            </div>

                            <!-- 4º quadro - Trabalho-->
                            <!--
                            <div class="col s12">
                                <div class="card">
                                    <div class="card-image">
                                        <div class="video-container">
                                            <iframe width="853" height="480" src="//www.youtube.com/embed/Q8TXgCzxEnw?rel=0" frameborder="0" allowfullscreen></iframe>
                                        </div>                             

                                        <div class="card-content">
                                            <p><?php echo $lang['registerWork'];?></p>
                                        </div>   

                                        <div class="container">
                                            <div class="row center">
                                            
                                                <div class="col s11 left-align offset-m1">
                                                    
                                                    <p>
                                                        <label>
                                                            <input class="with-gap" name="trabalho" type="radio" value="Sim"   />  
                                                            <span>1- Sim</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input class="with-gap" name="trabalho" type="radio" value="Nao"  />
                                                            <span>2- Não</span>
                                                        </label>
                                                    </p>											
                                                    
                                                </div>							
                                            </div>               
                                        </div>                                    
                                    </div>
                                </div>  
                            </div> -->

                            <!--  quadro - Salário-->
                            <!--
                            <div class="col s12">
                                <div class="card">
                                    <div class="card-image">
                                        <div class="video-container">
                                            <iframe width="853" height="480" src="//www.youtube.com/embed/Q8TXgCzxEnw?rel=0" frameborder="0" allowfullscreen></iframe>
                                        </div>                             

                                        <div class="card-content">
                                            <p><?php echo $lang['registerRent'];?></p>
                                        </div>   

                                        <div class="container">
                                            <div class="row center">
                                                
                                                <div class="col s11 left-align offset-m1">
                                                    
                                                    <p>
                                                        <label>
                                                            <input class="with-gap" name="salario" type="radio" value="Sem renda" />  
                                                            <span>1- Sem Renda</span>
                                                        </label>
                                                    </p>    
                                                    <p>    
                                                        <label>
                                                            <input class="with-gap" name="salario" type="radio" value="< R$ 1.100,00" />
                                                            <span>2- < R$ 1.100,00</span>
                                                        </label>
                                                    </p>    
                                                    <p>    
                                                        <label>
                                                            <input class="with-gap" name="salario" type="radio" value="Entre R$ 1.100,00 e R$ 3.000,00"  />
                                                            <span>3- Entre R$ 1.100,00 e R$ 3.000,00</span>
                                                        </label>
                                                    </p>    
                                                    <p>    
                                                        <label>
                                                            <input class="with-gap" name="salario" type="radio" value="> R$ 3.000,00" />
                                                            <span>4- > R$ 3.000,00</span>
                                                        </label>
                                                    </p>						
                                                    
                                                </div>							
                                            </div>   
                                        </div>
                                    
                                    </div>
                                </div>  
                            </div> -->

                            <!-- quadro - Escolaridade-->
                            <div class="col s12">
                                <div class="card">
                                    <div class="card-image">
                                        <div class="video-container">
                                        <iframe width="853" height="480" src=<?php echo $lang['video-sociodemografico_escolaridade'];?> frameborder="0" allowfullscreen></iframe>
                                        </div>                             

                                        <div class="card-content">
                                            <p style="font-weight: bold; font-size: 16px;"><?php echo $lang['registerScholarity'];?></p>
                                        </div>   

                                        <div class="container">
                                            <div class="row center">
                                                <!-- <div class="col s6 left-align offset-m3"> -->
                                                <div class="col s11 left-align offset-m1">
                                                    
                                                    <p>
                                                        <label>
                                                            <input class="with-gap" name="escolaridade" type="radio" value="Sem instrucao" required="required" />  
                                                            <span>1- Sem instrução</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input class="with-gap" name="escolaridade" type="radio" value="Ensino Fundamental Incompleto" required="required" />
                                                            <span>2- Ensino Fundamental Incompleto</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input class="with-gap" name="escolaridade" type="radio" value="Ensino Fundamental Completo" required="required" />
                                                            <span>3- Ensino Fundamental Completo</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input class="with-gap" name="escolaridade" type="radio" value="Ensino Medio Incompleto" required="required"/>
                                                            <span>4- Ensino Médio Incompleto</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input class="with-gap" name="escolaridade" type="radio" value="Ensino Medio Completo" required="required"  />
                                                            <span>5- Ensino Médio Completo</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input class="with-gap" name="escolaridade" type="radio" value="Ensino Superior Incompleto" required="required" />
                                                            <span>6- Ensino Superior Incompleto</span>
                                                        </label>
                                                    </p>	
                                                    <p>
                                                        <label>
                                                            <input class="with-gap" name="escolaridade" type="radio" value="Ensino Superior Incompleto" required="required" />
                                                            <span>7- Ensino Superior Completo</span>
                                                        </label>
                                                    </p>	
                                                    <p>
                                                        <label>
                                                            <input class="with-gap" name="escolaridade" type="radio" value="Pos-graduação" required="required" />
                                                            <span>8- Pós-graduação</span>
                                                        </label>
                                                    </p>									
                                                    
                                                </div>							
                                            </div>                                     
                                        </div>
                                        
                                    </div>
                                </div>  
                            </div>

                            <!-- 5º quadro - Surdez-->
                            <div class="col s12">
                                <div class="card">
                                    <div class="card-image">
                                        <div class="video-container">
                                        <iframe width="853" height="480" src=<?php echo $lang['video-sociodemografico_surdez'];?> frameborder="0" allowfullscreen></iframe>
                                        </div>                             

                                        <div class="card-content">
                                            <p style="font-weight: bold; font-size: 16px;"><?php echo $lang['registerDeafness'];?></p>
                                        </div>   

                                        <div class="container">
                                            <div class="row center">
                                                <!-- <div class="col s6 left-align offset-m3"> -->
                                                <div class="col s11 left-align offset-m1">
                                                    
                                                    <p>
                                                        <label>
                                                            <input class="with-gap" name="surdez" type="radio" value="Surdo" required="required" />  
                                                            <span>1- Surdo</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input class="with-gap" name="surdez" type="radio" value="Nao Surdo" required="required" />
                                                            <span>2- Não Surdo</span>
                                                        </label>
                                                    </p>											
                                                    
                                                </div>							
                                            </div>               
                                        </div>
                                    
                                    </div>
                                </div>  
                            </div>

                            <!-- 6º quadro - Fluência em Libras-->
                            <div class="col s12">
                                <div class="card">
                                    <div class="card-image">
                                        <div class="video-container">
                                        <iframe width="853" height="480" src=<?php echo $lang['video-sociodemografico_fluencia_libras'];?> frameborder="0" allowfullscreen></iframe>
                                        </div>                             

                                        <div class="card-content">
                                            <p style="font-weight: bold; font-size: 16px;"><?php echo $lang['registerFluency'];?></p>
                                        </div>   

                                        <div class="container">
                                            <div class="row center">
                                                <!-- <div class="col s6 left-align offset-m3"> -->
                                                <div class="col s11 left-align offset-m1">
                                                    
                                                    <p>
                                                        <label>
                                                            <input class="with-gap" name="fluencia_libras" type="radio" value="Sim" required="required" />  
                                                            <span>1- Sim</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input class="with-gap" name="fluencia_libras" type="radio" value="Nao" required="required" />
                                                            <span>2- Não</span>
                                                        </label>
                                                    </p>											
                                                    
                                                </div>							
                                            </div>               
                                        </div>
                                        
                                    </div>
                                </div>  
                            </div>

                            <!-- 7º quadro - Idade Libras-->
                            <!-- div class="col s12 m12 offset-m-1"> -->
                            <div class="col s12">
                                <div class="card">
                                    <div class="card-image">
                                        <div class="video-container">
                                        <iframe width="853" height="480" src=<?php echo $lang['video-sociodemografico_idade_libras'];?> frameborder="0" allowfullscreen></iframe>
                                        </div>     
                                        
                                        <div class="card-content">
                                            <p style="font-weight: bold; font-size: 16px;"><?php echo $lang['registerLibras'];?></p>
                                        </div>

                                        <div class="container">
                                            <div class="row">
                                                </br></br>
                                                <div class="input-field col s12 m12 center-align">                                    
                                                    <select id='idade_libras' name='idade_libras' required="required" class="validate">
                                                        <option value="" disabled selected>Clique aqui</option>
                                                        <option value="Não sou sinalizante da Libras">Não sou sinalizante da Libras.</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                        <option value="13">13</option>
                                                        <option value="14">14</option>
                                                        <option value="15">15</option>
                                                        <option value="16">16</option>
                                                        <option value="17">17</option>
                                                        <option value="18">18</option>
                                                        <option value="19">19</option>
                                                        <option value="20">20</option>
                                                        <option value="21">21</option>
                                                        <option value="22">22</option>
                                                        <option value="23">23</option>
                                                        <option value="24">24</option>
                                                        <option value="25">25</option>
                                                        <option value="26">26</option>
                                                        <option value="27">27</option>
                                                        <option value="28">28</option>
                                                        <option value="29">29</option>
                                                        <option value="30">30</option>
                                                        <option value="31">31</option>
                                                        <option value="32">32</option>
                                                        <option value="33">33</option>
                                                        <option value="34">34</option> 
                                                        <option value="35">35</option>
                                                        <option value="36">36</option>
                                                        <option value="37">37</option>
                                                        <option value="38">38</option>
                                                        <option value="39">39</option>
                                                        <option value="40">40</option>
                                                        <option value="41">41</option>
                                                        <option value="42">42</option>
                                                        <option value="43">43</option>
                                                        <option value="44">44</option>
                                                        <option value="45">45</option>
                                                        <option value="46">46</option>
                                                        <option value="47">47</option> 
                                                        <option value="48">48</option>
                                                        <option value="49">49</option>
                                                        <option value="50">50</option>
                                                        <option value="51">51</option>
                                                        <option value="52">52</option>
                                                        <option value="53">53</option>
                                                        <option value="54">54</option>
                                                        <option value="55">55</option>
                                                        <option value="56">56</option>
                                                        <option value="57">57</option>
                                                        <option value="58">58</option>
                                                        <option value="59">59</option>
                                                        <option value="60">60</option>
                                                        <option value="61">61</option>
                                                        <option value="62">62</option>
                                                        <option value="63">63</option>
                                                        <option value="64">64</option>
                                                        <option value="65">65</option>
                                                        <option value="66">66</option> 
                                                        <option value="67">67</option>
                                                        <option value="68">68</option>
                                                        <option value="69">69</option>
                                                        <option value="70">70</option>
                                                        <option value="71">71</option>
                                                        <option value="72">72</option>
                                                        <option value="73">73</option>
                                                        <option value="74">74</option>
                                                        <option value="75">75</option>
                                                        <option value="76">76</option>
                                                        <option value="77">77</option>
                                                        <option value="78">78</option>
                                                        <option value="79">79</option>
                                                        <option value="80">80</option>
                                                        <option value="81">81</option>
                                                        <option value="82">82</option>
                                                        <option value="83">83</option>
                                                        <option value="84">84</option>
                                                        <option value="85">85</option>
                                                        <option value="86">86</option>
                                                        <option value="87">87</option>
                                                        <option value="88">88</option>
                                                        <option value="89">89</option>
                                                        <option value="90">90</option>
                                                        <option value="91">91</option>
                                                        <option value="92">92</option>
                                                        <option value="93">93</option>
                                                        <option value="94">94</option>
                                                        <option value="95">95</option>
                                                        <option value="96">96</option>
                                                        <option value="97">97</option>
                                                        <option value="98">98</option>
                                                        <option value="99">99</option>
                                                        <option value="100">100</option>     
                                                    </select>   
                                                    <!-- <label>Images in select</label>  -->

                                                    <script>
                                                        $("select[required]").css({display: "block", height: 0, padding: 0, width: 0, position: 'absolute'});
                                                    </script>

                                                </div>                                          
                                            </div> 
                                        </div>                              
                                                    
                                    </div>                            
                                </div>                     
                            </div>

                            <!-- 8º quadro - Pais Libras-->
                            <div class="col s12">
                                <div class="card">
                                    <div class="card-image">
                                        <div class="video-container">
                                        <iframe width="853" height="480" src=<?php echo $lang['video-sociodemografico_pais_libras'];?> frameborder="0" allowfullscreen></iframe>
                                        </div>                             

                                        <div class="card-content">
                                            <p style="font-weight: bold; font-size: 16px;"><?php echo $lang['registerParents'];?></p>
                                        </div>   

                                        <div class="container">
                                            <div class="row center">
                                                <!-- <div class="col s6 left-align offset-m3"> -->
                                                <div class="col s11 left-align offset-m1">
                                                    
                                                    <p>
                                                        <label>
                                                            <input class="with-gap" name="pais_libras" type="radio" value="Sim" required="required" />  
                                                            <span>1- Sim</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input class="with-gap" name="pais_libras" type="radio" value="Nao" required="required" />
                                                            <span>2- Não</span>
                                                        </label>
                                                    </p>											
                                                    
                                                </div>							
                                            </div>               
                                        </div>
                                    
                                    </div>
                                </div>  
                            </div>

                            <!-- 9º quadro - Pais Surdos-->
                            <div class="col s12">
                                <div class="card">
                                    <div class="card-image">
                                        <div class="video-container">
                                        <iframe width="853" height="480" src=<?php echo $lang['video-sociodemografico_pais_surdos'];?> frameborder="0" allowfullscreen></iframe>
                                        </div>                             

                                        <div class="card-content">
                                            <p style="font-weight: bold; font-size: 16px;"><?php echo $lang['registerParentsDeafness'];?></p>
                                        </div>   

                                        <div class="container">
                                            <div class="row center">
                                                <!-- <div class="col s6 left-align offset-m3"> -->
                                                <div class="col s11 left-align offset-m1">
                                                    
                                                    <p>
                                                        <label>
                                                            <input class="with-gap" name="pais_surdos" type="radio" value="Sim" required="required" />  
                                                            <span>1- Sim</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input class="with-gap" name="pais_surdos" type="radio" value="Nao" required="required" />
                                                            <span>2- Não</span>
                                                        </label>
                                                    </p>											
                                                    
                                                </div>							
                                            </div>               
                                        </div>

                                        <!--
                                        <div class="card-action"> -->
                                            <!-- <a href="<?php echo site_url('Main/event?lang=' . $_SESSION['lang'])?>" class="waves-effect waves-light btn-small indigo modal-trigger"><?php echo $lang['registerEvent'];?></a> -->
                                            <!-- <a href="<?php echo site_url('Main/replyquestionnaire?lang=' . $_SESSION['lang'])?>" class="waves-effect waves-light btn-small indigo modal-trigger"><?php echo $lang['saveAge'];?></a>
                                        </div> -->
                                    </div>
                                </div>  
                            </div>


                            <!-- 10º quadro - Botão de Salvar -->
                            <div class="col s12">
                                <div class="card">
                                    <div class="card-image">
                                        <div class="video-container">
                                        <iframe width="853" height="480" src=<?php echo $lang['video-sociodemografico_salvar'];?> frameborder="0" allowfullscreen></iframe>
                                        </div> 
                                    </div>                            

                                    <div class="card-content">
                                        <p style="font-weight: bold; font-size: 16px;"><?php echo $lang['registerQuestionnaire'];?></p>
                                    </div>
                                    

                                    <div class="row center">
                                        <div class="input-field col s12">    
                                            <!--
                                            <a href="<?php echo site_url('Main/Navigation?lang=' . $_SESSION['lang'])?>" class="modal-action modal-close btn grey darken-1 right">
                                                <?php echo $lang['back'];?>
                                            </a> -->
                                            <button type="submit" value="save" class="btn btn-primary center"><?php echo $lang['save'];?></button>
                                            <!-- <a href="<?php echo site_url('Main/Navigation?lang=' . $_SESSION['lang'])?> -->

                                            
                                        </div>
                                    </div>




                                </div>
                            </div>    
                        <!-- </div> -->
                       

                    </div>

                </div>
            </div>
        </form>        

    </main>

</body>


<!--
<script>
    var urlVideoNome='<?php echo $lang['video-informe-nome'];?>';
    var urlVideoEmail='<?php echo $lang['video-informe-email'];?>';
    var urlVideoSenha='<?php echo $lang['video-informe-senha'];?>';


// chama esse evento quando clica em cadastrar(antes do envio para o controller)
    $('#sociodemographicForm').submit(function() 

    { 
        /*
        if($('#idade').val() == '')
        {          
            showWarningModal('Informe a idade:', urlVideoNome);
            return false; 
        }*/


        // valida se o nome é string vazio  
        // essa validação pode melhorar, numero maximo de caracteres por exemplo.
        if($('#cidade').val() == ''){
            // exibe erro na tela
            showWarningModal('Informe a cidade', urlVideoNome);
            // retorna falso porque dados estão invalidos
            return false; // return false to cancel form action
        }

        if($('#sexo').val() == '')
        {          
            showWarningModal('Informe o gênero:', urlVideoNome);
            return false; 
        }*/
        /*
        if($('#email').val() == ''){
            showWarningModal('Informe o email:', urlVideoEmail);
            return false; // return false to cancel form action
        }
        
        if($('#password').val() == ''){
            showWarningModal('Informe a Senha:', urlVideoSenha);
            return false; // return false to cancel form action
        }*/
        // Chama o controller
        return true;   
    });

    function showWarningModal(title, videoUrl){
        Swal.fire({
            type: 'warning',
            html:
                title + ' <br><br>' +
                '<video width="400" controls> <source src="' + videoUrl + '" type="video/mp4"></video>',
            showCloseButton: true,
            focusConfirm: false
        }) 
    }
</script> -->