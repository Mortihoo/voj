
<?php
/**
 * Created by PhpStorm.
 * User: mortihoo
 * Date: 2017/7/20
 * Time: 19:44
 */
require_once 'header.php';
?>
<div class="wrapper">
    <?php
    require_once 'navmenu.php';
    ?>
     <div class='card-holder'>
<div class='card-wrapper'>
            <a href='#top' target='_self'>
                <div class='card bg-06'>
                    <span class='card-content'>�ص�����</span>
                </div>
            </a>
        </div><div class='card-wrapper'>
            <a href='#problem1'>
                <div class='card bg-02'>
                    <span class='card-content'>
		����ʮ�ﲻ����	</span>
                </div>
            </a>
        </div><div class='card-wrapper'>
            <a href='#problem2'>
                <div class='card bg-03'>
                    <span class='card-content'>
		±��±����������	</span>
                </div>
            </a>
        </div><div class='card-wrapper'>
            <a href='#problem3'>
                <div class='card bg-04'>
                    <span class='card-content'>
		����ֻ��Ϲ����	</span>
                </div>
            </a>
        </div><div class='card-wrapper'>
            <a href='#problem4'>
                <div class='card bg-05'>
                    <span class='card-content'>
		���ǣ����Բ���ǩ���⣡	</span>
                </div>
            </a>
        </div><div class='card-wrapper'>
            <a href='#problem5'>
                <div class='card bg-06'>
                    <span class='card-content'>
		���Ǳ��˵������Ĳ���ǩ����Ŀ	</span>
                </div>
            </a>
        </div><div class='card-wrapper'>
            <a href='#problem6'>
                <div class='card bg-01'>
                    <span class='card-content'>
		¥����ǩ����	</span>
                </div>
            </a>
        </div><div class='card-wrapper'>
            <a href='#problem7'>
                <div class='card bg-02'>
                    <span class='card-content'>
		��ԩ���ң��Ҳ���ǩ����	</span>
                </div>
            </a>
        </div><div class='card-wrapper'>
            <a href='#problem8'>
                <div class='card bg-03'>
                    <span class='card-content'>
		¥����ǩ����	</span>
                </div>
            </a>
        </div><div class='card-wrapper'>
            <a href='#problem9'>
                <div class='card bg-04'>
                    <span class='card-content'>
		�Ϻ��н�����	</span>
                </div>
            </a>
        </div><div class='card-wrapper'>
            <a href='#problem10'>
                <div class='card bg-05'>
                    <span class='card-content'>
		���ǵ�boring freestyle 	</span>
                </div>
            </a>
        </div> </div>

    <div style="text-align:center;clear:both;"></div>


    <div id="content"> <div id="problem1">
            <h2>1001 
		����ʮ�ﲻ����	</h2>
            <p style="text-align:center;">Time Limit : 3000/1000ms (Java/Other)&nbsp;&nbsp;&nbsp;Memory Limit : 65535/32768K (Java/Other)
                </p>
            <h3>Problem Description</h3>
            <p>
	����ʮ�ﲻ���㣬������Ѽ�������������������˾����С������������Ы�ӻ���������㣬ͣ����Ы�ӣ����װ�����ȥȥ������<br>Ϊ���İ�����Ы�ӣ�����ʹ���̤����ȥ����Ы�ӻ����·�ϡ�<br>��֮��������������<br>Ŀǰ��n�����У��������ڱ��Ϊ1�ĳ����Ҫȥ���Ϊn�ĳ��У�����m������·������ÿһ��·��������ǲ���ǿ��ͨ�Ļ�����Ҫ����˫����ʱ�䣬����ֻ��Ҫԭ���Ļ��Ѽ��ɣ�ǿ��ͨ����˼��������ͼ�У�a�ܵ���b��b�ܵ���a��������Ϊʲô����������ֵĹ���Ϊ��ô����������ĺ����أ�<br>Now,it's your turn.	</p>
            <h3>Input</h3>
            <p>
	��T������<br>��һ����1&lt;=n,m&lt;=100.<br>��������m�У�ÿ�����������֣�a��b��c<br>��ʾ��һ��a��b��·������Ϊc<br>1&lt;=a,b,c&lt;=100	</p>
            <h3>Output</h3>
            <p>
		��С���ѵ�ʱ��	</p>
            <h3>Sample Input</h3>
            <pre>2

3 2
1 3 1
3 1 2

3 1
1 3 1</pre>
            <h3>Sample Output</h3>
            
	<pre>1
2</pre>
        </div> <div id="problem2">
            <h2>1002 
		±��±����������	</h2>
            <p style="text-align:center;">Time Limit : 3000/1000ms (Java/Other)&nbsp;&nbsp;&nbsp;Memory Limit : 65535/32768K (Java/Other)
                </p>
            <h3>Problem Description</h3>
            <p>
	±�����֮����ζ�������֮�䣬��һɨ���գ����˼�����Ҳ��<br>һ�գ��ڶ�±�������˼���й�ʹ���ش���һ���⣬Ŀ��㱻��������ȥ��<br>����һ������ͼ���ڽӾ���A�����η����ʸ�����ͼ���ж��ٸ���ͬ�������Ρ�<br>ps���ڽӾ����е�Aij��ʾ�Ӷ���i������j����Ϊ3��·������<br>���ˣ���Ҫȥ��ľ�³�±���ˣ������档	</p>
            <h3>Input</h3>
            <p>
	��һ����һ��n<br>��ʾ��һ��n*n�ľ���1&lt;=n&lt;=100)<br>����n��n�б�ʾ�ڽӾ���	</p>
            <h3>Output</h3>
            <p>
		����ж��ٸ���ͬ��������	</p>
            <h3>Sample Input</h3>
            <pre>3
2 0 0
0 2 0
0 0 2</pre>
            <h3>Sample Output</h3>
            
	<pre>1</pre>
        </div> <div id="problem3">
            <h2>1003 
		����ֻ��Ϲ����	</h2>
            <p style="text-align:center;">Time Limit : 3000/1000ms (Java/Other)&nbsp;&nbsp;&nbsp;Memory Limit : 65535/32768K (Java/Other)
                </p>
            <h3>Problem Description</h3>
            <p>
	����һ������ֵֹ����磬������������Щ���Ժ�����Ҳ��֪����ʲô���⡣<br>������n�����֣��������֮����γ�һ���µ�������ô������1��k�ķ�Χ���ж�������û����ϳ�����<br>ps������ÿ�����ÿ������ֻ����һ�Ρ�	</p>
            <h3>Input</h3>
            <p>
	��������<br>��һ��n ��k��1&lt;=n&lt;=100,1&lt;=k&lt;=50000)<br><br>�ڶ���n������(1&lt;=xi&lt;=500)<br><br>�����ļ�ĩβ	</p>
            <h3>Output</h3>
            <p>
		����ж��ٸ�����û����ϳ���	</p>
            <h3>Sample Input</h3>
            <pre>1 10
2</pre>
            <h3>Sample Output</h3>
            
	<pre>9</pre>
        </div> <div id="problem4">
            <h2>1004 
		���ǣ����Բ���ǩ���⣡	</h2>
            <p style="text-align:center;">Time Limit : 3000/1000ms (Java/Other)&nbsp;&nbsp;&nbsp;Memory Limit : 65535/32768K (Java/Other)
                </p>
            <h3>Problem Description</h3>
            <p>
	���Ǹ���n������, ����һ������x, ����������µĲ������ɴ�:<br>1.��X�Ķ����Ʊ�ʾΪb<sub>31</sub>b<sub>30</sub>....b<sub>0</sub>,����Է�ת����һ��λ(0��1��1��0)<br>2.��y�Ǹ���������һ������, ����԰�x��Ϊx^y, ��������^��ʾλ���������������.<br>����������������(S, T), ����ÿ����������Ҫ�ҳ���S���T����С��������.<br>	</p>
            <h3>Input</h3>
            <p>
	���������������. ��һ����һ������T (T��20), ��ʾ������������. ����ÿ������:<br>��һ�а�����������n��m  (1��n��15,1��m��10<sup>5</sup>), ��ʾ������������Ŀ��ѯ�ʵ���Ŀ. ������һ�а���n������a<sub>1</sub>,a<sub>2</sub>, .., a<sub>n</sub> (1��ai��10<sup>5</sup>).������m��, ÿ�а�����������Si��Ti(1��si,ti��10<sup>5</sup>), ����һ��ѯ��.<br>	</p>
            <h3>Output</h3>
            <p>
		����ÿ������, ���һ������S =C<sub>1</sub>+C<sub>2</sub> +��+C<sub>m</sub>,����Ci = i*Z<sub>i</sub>, Zi�ǵ�i��ѯ�ʵĴ𰸡����ڴ𰸿��ܴܺ󣬽��mod10<sup>9</sup>+7.<br>            <br><br>   	</p>
            <h3>Sample Input</h3>
            <pre>1
3 3
1 2 3
3 4
1 2
3 9</pre>
            <h3>Sample Output</h3>
            
	<pre>10

Hint
3-&gt;4(2�β���) 3-&gt;7-&gt;4
1-&gt;2(1�β���) 1^3 = 2
3-&gt;9(2�β���)3-&gt;1-&gt;9
</pre>
        </div> <div id="problem5">
            <h2>1005 
		���Ǳ��˵������Ĳ���ǩ����Ŀ	</h2>
            <p style="text-align:center;">Time Limit : 3000/1000ms (Java/Other)&nbsp;&nbsp;&nbsp;Memory Limit : 65535/32768K (Java/Other)
                </p>
            <h3>Problem Description</h3>
            <p>
	��ǰ����nֻ���ȵ����ǣ����Ƿֳ�������һ������Ϸ�����ǻ��ų�һ�ţ���iֻ���ǻ�����õ�һ������ֵbi���ӵ�i���ʱ�򣬵�iֻ���ǾͿ������������������ǰ��ĺ�������ͬһ���������ֵС���������ǡ�<br>Ϊ��ʹ��Ϸ������Ȥ�����ǵİְ֣����㣬�ᷢ��m�Σ���i�η�����ʱ��Ϊci�����ڵ�ci�������b1,b2,.....,bci��������1.<br>���ڣ�������֪���ڵ�n��󣬻��ж���ֻ���Ǵ��������<br>	</p>
            <h3>Input</h3>
            <p>
	��һ��ֻ��һ������T��T&lt;6������ʾ�������ݵ�������<br>�ڶ�������������n,m����ʾ���ǵĸ����Լ����㷢���Ĵ�������1&lt;=n&lt;=50000,1&lt;=bi&lt;=1000000��<br>�����е�n+2��,ÿ������������ai,bi,��ʾ��iֻ����������һ���Լ���������ֵ����0&lt;=ai&lt;=1,1&lt;=bi&lt;=1000000��<br>��n+3�е���n+m+2�У�ÿ����һ������ci����ʾGTW��i�η�����ʱ��.(1&lt;=ci&lt;=n)<br>	</p>
            <h3>Output</h3>
            <p>
		�ܹ�T�У���i�б�ʾ��i�������У�GT���ĸ�����	</p>
            <h3>Sample Input</h3>
            <pre>1
4 3
0 3
1 2
0 3
1 1
1
3
4
</pre>
            <h3>Sample Output</h3>
            
	<pre>3
��1��� ����ֵΪ4 2 3 1
��2��� ����ֵΪ4 2 3 1
��3��� ����ֵΪ5 3 4 1����2ֻGT����3ֻGT�������
��4��� ����ֵΪ6 4 5 2
ci����������� ͬһ����Է������
</pre>
        </div> <div id="problem6">
            <h2>1006 
		¥����ǩ����	</h2>
            <p style="text-align:center;">Time Limit : 3000/1000ms (Java/Other)&nbsp;&nbsp;&nbsp;Memory Limit : 65535/32768K (Java/Other)
                </p>
            <h3>Problem Description</h3>
            <p>
	���캣�ܿ�������ĩ��������֪��¥���й俴��һ���Ľ��ң����ǿ�ʼ˼�������������Ϊ(x1,y1,z1)�Ľ����ߵ�(x2,y2,z2)�ľ���Ϊ|x1-x2|+|y1-y2|+|z1-z2|����ô�ж��ٶԽ���֮��ľ����ǲ�����R����?�����Ǽ��������ȴ��ĺ��ܶ�������������޲ߣ�ֻ�����������������������ˡ�<br>	</p>
            <h3>Input</h3>
            <p>
	��һ����һ������T(1 &lt;= T &lt;= 5),��ʾ��T�����ݡ�<br>������T�����ݣ�<br>��һ������������n,q(1 &lt;= n &lt;=50000, 1 &lt; q &lt;= 10000)����ʾ��n�䷿�䣬q��ѯ�ʡ�<br>������n�У�ÿ����������x,y,z(0 &lt;= x,y,z &lt;= 10)��ʾ��Щ���ҵ����ꡣ<br>�����q�У�ÿ��һ������R(0 &lt;= R &lt;= 10000),��˼��������	</p>
            <h3>Output</h3>
            <p>
		����ÿ��ѯ��Rһ��һ����������ʾ�ж��ٶԽ��������ϵ��	</p>
            <h3>Sample Input</h3>
            <pre>1
3 3
0 0 0
1 1 1
1 1 1
1
2
3</pre>
            <h3>Sample Output</h3>
            
	<pre>1
1
3</pre>
        </div> <div id="problem7">
            <h2>1007 
		��ԩ���ң��Ҳ���ǩ����	</h2>
            <p style="text-align:center;">Time Limit : 3000/1000ms (Java/Other)&nbsp;&nbsp;&nbsp;Memory Limit : 65535/32768K (Java/Other)
                </p>
            <h3>Problem Description</h3>
            <p>
	��һ����N�����N��3��4����5�ı��������&quot;YES&quot;,�������&quot;NO&quot;.	</p>
            <h3>Input</h3>
            <p>
	T�����ݣ�(1 &lt;= T &lt;= 2000)<br>ÿ����������һ�а���һ������N����1 &lt; N &lt; 10&lt;sup&gt;5&lt;/sup&gt;)	</p>
            <h3>Output</h3>
            <p>
		ÿ�����ݶ�Ӧһ�������<br>	</p>
            <h3>Sample Input</h3>
            <pre>4
3
4
7
1</pre>
            <h3>Sample Output</h3>
            
	<pre>YES
YES
NO
NO</pre>
        </div> <div id="problem8">
            <h2>1008 
		¥����ǩ����	</h2>
            <p style="text-align:center;">Time Limit : 3000/1000ms (Java/Other)&nbsp;&nbsp;&nbsp;Memory Limit : 65535/32768K (Java/Other)
                </p>
            <h3>Problem Description</h3>
            <p>
	���ܺ������ַ�����������ϲ�����Ĵ�����Ϊ���һ���ַ����ǻ��Ĵ�����ζ����ֻ��һ����ַ����Ϳ����ˡ����Ĵ���ǰ��������ͬ���ַ���������&quot;abba&quot;, &quot;abcba&quot;�ǻ��Ĵ�����&quot;abbc&quot;, &quot;abab&quot;���ǻ��Ĵ�����������ǻ��Ĵ��ַ������ܾͻ�ʩչ�����ħ����ÿ������������1��ħ��ֵ�����ַ����е�һ����ĸ�����һ����ĸ����������0��ħ��ֵ�ı���ַ����и�����ĸ��˳�� ������һ���ַ���(ֻ��Сд��ĸ)��������ߺ��ܸ����������ʩչ�������ٵ�ħ��ֵʹ����ɻ��Ĵ��� 	</p>
            <h3>Input</h3>
            <p>
	��һ��ΪT����T��������С��20�� ������ÿ�к���һ���ַ�����ÿ���ַ�������С�ڵ���55555��<br>	</p>
            <h3>Output</h3>
            <p>
		ÿ�������������ħ��ֵ�������Ļ����ַ����� ����ж�����������ֵ�����С�Ľ����	</p>
            <h3>Sample Input</h3>
            <pre>2
abad
aacbd</pre>
            <h3>Sample Output</h3>
            
	<pre>abba
abcba</pre>
        </div> <div id="problem9">
            <h2>1009 
		�Ϻ��н�����	</h2>
            <p style="text-align:center;">Time Limit : 3000/1000ms (Java/Other)&nbsp;&nbsp;&nbsp;Memory Limit : 65535/32768K (Java/Other)
                </p>
            <h3>Problem Description</h3>
            <p>
	��ǰ�и��������и��Ϻ��к�С���У��Ϻ��и�С���н����£���ǰ�����������б�������飬���Ŷ������ߣ�����ȫ��̱��������ʧ�ķ衣<br>������Ϊ�����ۡ�����������һ���ر�����˼����Ŀ������һ��m����${10}^{k}$���ܳ���${2}^{m}$�����ֵ��	</p>
            <h3>Input</h3>
            <p>
	ÿһ�н���һ��$m\left( 1\leq m\leq {10}^{5}\right)$<br><br>�����ļ�ĩβ	</p>
            <h3>Output</h3>
            <p>
		���k	</p>
            <h3>Sample Input</h3>
            <pre>1
2</pre>
            <h3>Sample Output</h3>
            
	<pre>0
0</pre>
        </div> <div id="problem10">
            <h2>1010 
		���ǵ�boring freestyle 	</h2>
            <p style="text-align:center;">Time Limit : 3000/1000ms (Java/Other)&nbsp;&nbsp;&nbsp;Memory Limit : 65535/32768K (Java/Other)
                </p>
            <h3>Problem Description</h3>
            <p>
	һ�죬���ǳ����������������������ĵ�����<br><br>����ֽ�ϻ���N���㣬Ȼ����ÿ���㻭���Լ������Լ���һ����(�������Ϊ1-1)��<br>���һ�������ڵ����֮�仭��һ���ߣ�����֤�����֮��û��ƽ�бߣ���1-2��1=2����<br>Ȼ�����͵õ���һ��û��ƽ�бߵ�����ͼG��һ���ڽӾ���A�����Ҽ����A^2(�����ƽ��)<br><br>��ô��������ֻ����A^2������֪���ܷ�ʵ��ͼG���б���ÿ�߽�ͨ��һ��ͨ·��Ҳ����ŷ��ͼ<br><br>Hint��<br>һ������ͼ��ŷ��ͼ������������<br>1����ͼ���ж��㶼��ż�� <br>2����ͼ��һ����ͨͼ <br>���������������������������������������������������������������� <br>input��<br>��һ����N����ʾ��N���� <br>��������N*N��һ��A^2 ����	</p>
            <h3>Input</h3>
            <p>
	��һ����N����ʾ��N���� <br>��������N*N��һ��A^2 ����	</p>
            <h3>Output</h3>
            <p>
		�����ŷ��ͼ�����Yes���������No <br>	</p>
            <h3>Sample Input</h3>
            <pre>2
2 2
2 2
3
3 3 3
3 3 3
3 3 3</pre>
            <h3>Sample Output</h3>
            
	<pre>No
Yes</pre>
        </div></div>

    <!--<footer>-->
    <!--<hr>-->
    <!--<p>Copyright &copy;|You-know-who</p>-->
    <!--</footer>-->

</div>
<?php
include_once 'footer.php';