
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
                    <span class='card-content'>回到顶部</span>
                </div>
            </a>
        </div><div class='card-wrapper'>
            <a href='#problem1'>
                <div class='card bg-02'>
                    <span class='card-content'>
		春风十里不如你	</span>
                </div>
            </a>
        </div><div class='card-wrapper'>
            <a href='#problem2'>
                <div class='card bg-03'>
                    <span class='card-content'>
		卤煮卤煮你在哪里	</span>
                </div>
            </a>
        </div><div class='card-wrapper'>
            <a href='#problem3'>
                <div class='card bg-04'>
                    <span class='card-content'>
		数论只会瞎暴力	</span>
                </div>
            </a>
        </div><div class='card-wrapper'>
            <a href='#problem4'>
                <div class='card bg-05'>
                    <span class='card-content'>
		糖糖：绝对不是签到题！	</span>
                </div>
            </a>
        </div><div class='card-wrapper'>
            <a href='#problem5'>
                <div class='card bg-06'>
                    <span class='card-content'>
		糖糖别胡说，我真的不是签到题目	</span>
                </div>
            </a>
        </div><div class='card-wrapper'>
            <a href='#problem6'>
                <div class='card bg-01'>
                    <span class='card-content'>
		楼下是签到题	</span>
                </div>
            </a>
        </div><div class='card-wrapper'>
            <a href='#problem7'>
                <div class='card bg-02'>
                    <span class='card-content'>
		别冤枉我，我不是签到题	</span>
                </div>
            </a>
        </div><div class='card-wrapper'>
            <a href='#problem8'>
                <div class='card bg-03'>
                    <span class='card-content'>
		楼上是签到题	</span>
                </div>
            </a>
        </div><div class='card-wrapper'>
            <a href='#problem9'>
                <div class='card bg-04'>
                    <span class='card-content'>
		老和尚讲故事	</span>
                </div>
            </a>
        </div><div class='card-wrapper'>
            <a href='#problem10'>
                <div class='card bg-05'>
                    <span class='card-content'>
		糖糖的boring freestyle 	</span>
                </div>
            </a>
        </div> </div>

    <div style="text-align:center;clear:both;"></div>


    <div id="content"> <div id="problem1">
            <h2>1001 
		春风十里不如你	</h2>
            <p style="text-align:center;">Time Limit : 3000/1000ms (Java/Other)&nbsp;&nbsp;&nbsp;Memory Limit : 65535/32768K (Java/Other)
                </p>
            <h3>Problem Description</h3>
            <p>
	春风十里不如你，北京烤鸭松鼠鱼臭豆腐三文鱼寿司章鱼小丸子羊杂汤羊蝎子火锅都不如你，停！羊蝎子？！亲爱的我去去就来。<br>为了心爱的羊蝎子，糖忍痛割爱，踏上了去往羊蝎子火锅的路上。<br>心之所向，素履以往。<br>目前有n个城市，现在糖在标号为1的城市里，要去标号为n的城市，给你m条有向路，对于每一条路，如果他们不是强连通的话，就要花费双倍的时间，否则只需要原本的花费即可（强连通的意思是在有向图中，a能到达b，b能到达a），至于为什么会有这样奇怪的规则（为甚么不问问神奇的海螺呢？<br>Now,it's your turn.	</p>
            <h3>Input</h3>
            <p>
	有T组数据<br>第一行是1&lt;=n,m&lt;=100.<br>接下来的m行，每行有三个数字，a，b，c<br>表示有一条a到b的路径花费为c<br>1&lt;=a,b,c&lt;=100	</p>
            <h3>Output</h3>
            <p>
		最小花费的时间	</p>
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
		卤煮卤煮你在哪里	</h2>
            <p style="text-align:center;">Time Limit : 3000/1000ms (Java/Other)&nbsp;&nbsp;&nbsp;Memory Limit : 65535/32768K (Java/Other)
                </p>
            <h3>Problem Description</h3>
            <p>
	卤煮，轻啖之，回味无穷，举箸之间，便一扫而空，是人间奇珍也。<br>一日，在对卤煮的深深思念中鬼使神差地打开了一道题，目光便被其吸引而去。<br>给定一个无向图的邻接矩阵A的三次方，问该无向图中有多少个不同的三角形。<br>ps：邻接矩阵中的Aij表示从顶点i到顶点j长度为3的路径数。<br>好了，我要去看木下吃卤煮了，你们玩。	</p>
            <h3>Input</h3>
            <p>
	第一行是一个n<br>表示是一个n*n的矩阵（1&lt;=n&lt;=100)<br>下面n行n列表示邻接矩阵	</p>
            <h3>Output</h3>
            <p>
		输出有多少个不同的三角形	</p>
            <h3>Sample Input</h3>
            <pre>3
2 0 0
0 2 0
0 0 2</pre>
            <h3>Sample Output</h3>
            
	<pre>1</pre>
        </div> <div id="problem3">
            <h2>1003 
		数论只会瞎暴力	</h2>
            <p style="text-align:center;">Time Limit : 3000/1000ms (Java/Other)&nbsp;&nbsp;&nbsp;Memory Limit : 65535/32768K (Java/Other)
                </p>
            <h3>Problem Description</h3>
            <p>
	这是一个奇奇怪怪的世界，正如你在做这些迷迷糊糊我也不知道是什么的题。<br>现在有n个数字，数字相加之后会形成一个新的数，那么我问在1到k的范围内有多少数字没法组合出来。<br>ps：对于每个组合每个数字只能用一次。	</p>
            <h3>Input</h3>
            <p>
	多组数据<br>第一行n ，k（1&lt;=n&lt;=100,1&lt;=k&lt;=50000)<br><br>第二行n个数字(1&lt;=xi&lt;=500)<br><br>处理到文件末尾	</p>
            <h3>Output</h3>
            <p>
		输出有多少个数字没法组合出来	</p>
            <h3>Sample Input</h3>
            <pre>1 10
2</pre>
            <h3>Sample Output</h3>
            
	<pre>9</pre>
        </div> <div id="problem4">
            <h2>1004 
		糖糖：绝对不是签到题！	</h2>
            <p style="text-align:center;">Time Limit : 3000/1000ms (Java/Other)&nbsp;&nbsp;&nbsp;Memory Limit : 65535/32768K (Java/Other)
                </p>
            <h3>Problem Description</h3>
            <p>
	糖糖给出n个整数, 对于一个整数x, 你可以做如下的操作若干次:<br>1.令X的二进制表示为b<sub>31</sub>b<sub>30</sub>....b<sub>0</sub>,你可以翻转其中一个位(0变1，1变0)<br>2.令y是给出的其中一个整数, 你可以把x变为x^y, 其中这里^表示位运算里面的异或操作.<br>现在有若干整数对(S, T), 对于每对整数你需要找出从S变成T的最小操作次数.<br>	</p>
            <h3>Input</h3>
            <p>
	输入包含多组数据. 第一行有一个整数T (T≤20), 表示测试数据组数. 对于每组数据:<br>第一行包含两个整数n和m  (1≤n≤15,1≤m≤10<sup>5</sup>), 表示给出整数的数目和询问的数目. 接下来一行包含n个整数a<sub>1</sub>,a<sub>2</sub>, .., a<sub>n</sub> (1≤ai≤10<sup>5</sup>).接下来m行, 每行包含两个整数Si和Ti(1≤si,ti≤10<sup>5</sup>), 代表一组询问.<br>	</p>
            <h3>Output</h3>
            <p>
		对于每组数据, 输出一个整数S =C<sub>1</sub>+C<sub>2</sub> +…+C<sub>m</sub>,其中Ci = i*Z<sub>i</sub>, Zi是第i次询问的答案。由于答案可能很大，结果mod10<sup>9</sup>+7.<br>            <br><br>   	</p>
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
3-&gt;4(2次操作) 3-&gt;7-&gt;4
1-&gt;2(1次操作) 1^3 = 2
3-&gt;9(2次操作)3-&gt;1-&gt;9
</pre>
        </div> <div id="problem5">
            <h2>1005 
		糖糖别胡说，我真的不是签到题目	</h2>
            <p style="text-align:center;">Time Limit : 3000/1000ms (Java/Other)&nbsp;&nbsp;&nbsp;Memory Limit : 65535/32768K (Java/Other)
                </p>
            <h3>Problem Description</h3>
            <p>
	从前，有n只萌萌的糖糖，他们分成了两组一起玩游戏。他们会排成一排，第i只糖糖会随机得到一个能力值bi。从第i秒的时候，第i只糖糖就可以消灭掉所有排在他前面的和他不是同一组的且能力值小于他的糖糖。<br>为了使游戏更加有趣，糖糖的爸爸，娇姐，会发功m次，第i次发功的时间为ci，则在第ci秒结束后，b1,b2,.....,bci都会增加1.<br>现在，娇姐想知道在第n秒后，会有多少只糖糖存活下来。<br>	</p>
            <h3>Input</h3>
            <p>
	第一行只有一个整数T（T&lt;6），表示测试数据的组数。<br>第二行有两个整数n,m。表示糖糖的个数以及娇姐发功的次数。（1&lt;=n&lt;=50000,1&lt;=bi&lt;=1000000）<br>第三行到n+2行,每行有两个整数ai,bi,表示第i只糖糖属于那一组以及他的能力值。（0&lt;=ai&lt;=1,1&lt;=bi&lt;=1000000）<br>第n+3行到第n+m+2行，每行有一个整数ci，表示GTW第i次发功的时间.(1&lt;=ci&lt;=n)<br>	</p>
            <h3>Output</h3>
            <p>
		总共T行，第i行表示第i组数据中，GT存活的个数。	</p>
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
第1秒后 能力值为4 2 3 1
第2秒后 能力值为4 2 3 1
第3秒后 能力值为5 3 4 1，第2只GT被第3只GT消灭掉了
第4秒后 能力值为6 4 5 2
ci并不是有序的 同一秒可以发功多次
</pre>
        </div> <div id="problem6">
            <h2>1006 
		楼下是签到题	</h2>
            <p style="text-align:center;">Time Limit : 3000/1000ms (Java/Other)&nbsp;&nbsp;&nbsp;Memory Limit : 65535/32768K (Java/Other)
                </p>
            <h3>Problem Description</h3>
            <p>
	今天海杰考完了期末考，他在知行楼里闲逛看着一间间的教室，于是开始思考：如果从坐标为(x1,y1,z1)的教室走到(x2,y2,z2)的距离为|x1-x2|+|y1-y2|+|z1-z2|，那么有多少对教室之间的距离是不超过R的呢?。但是几何上来先打表的海杰对这个问题束手无策，只能求聪明的你们来帮他解决了。<br>	</p>
            <h3>Input</h3>
            <p>
	第一行是一个整数T(1 &lt;= T &lt;= 5),表示有T组数据。<br>接下来T组数据：<br>第一行是两个整数n,q(1 &lt;= n &lt;=50000, 1 &lt; q &lt;= 10000)，表示有n间房间，q次询问。<br>接下来n行，每行三个整数x,y,z(0 &lt;= x,y,z &lt;= 10)表示这些教室的坐标。<br>最后是q行，每行一个整数R(0 &lt;= R &lt;= 10000),意思见描述。	</p>
            <h3>Output</h3>
            <p>
		对于每个询问R一行一个整数，表示有多少对教室满足关系。	</p>
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
		别冤枉我，我不是签到题	</h2>
            <p style="text-align:center;">Time Limit : 3000/1000ms (Java/Other)&nbsp;&nbsp;&nbsp;Memory Limit : 65535/32768K (Java/Other)
                </p>
            <h3>Problem Description</h3>
            <p>
	给一个数N，如果N是3、4或者5的倍数，输出&quot;YES&quot;,否则输出&quot;NO&quot;.	</p>
            <h3>Input</h3>
            <p>
	T组数据，(1 &lt;= T &lt;= 2000)<br>每组数据输入一行包含一个整数N。（1 &lt; N &lt; 10&lt;sup&gt;5&lt;/sup&gt;)	</p>
            <h3>Output</h3>
            <p>
		每组数据对应一个输出。<br>	</p>
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
		楼上是签到题	</h2>
            <p style="text-align:center;">Time Limit : 3000/1000ms (Java/Other)&nbsp;&nbsp;&nbsp;Memory Limit : 65535/32768K (Java/Other)
                </p>
            <h3>Problem Description</h3>
            <p>
	海杰很讨厌字符串，但是他喜欢回文串，因为如果一个字符串是回文串，意味着他只读一半的字符串就可以了。回文串是前后读结果相同的字符串，例如&quot;abba&quot;, &quot;abcba&quot;是回文串，而&quot;abbc&quot;, &quot;abab&quot;不是回文串。如果遇到非回文串字符，海杰就会施展神奇的魔法，每次他可以消耗1个魔法值将该字符串中的一个字母变成另一个字母，或者消耗0个魔法值改变该字符串中各个字母的顺序。 现在有一个字符串(只含小写字母)，请你告诉海杰该如何做才能施展尽可能少的魔法值使它变成回文串。 	</p>
            <h3>Input</h3>
            <p>
	第一行为T，有T个样例。小于20。 接下来每行含有一个字符串，每个字符串长度小于等于55555。<br>	</p>
            <h3>Output</h3>
            <p>
		每行输出消耗最少魔法值所产生的回文字符串， 如果有多个结果，输出字典序最小的结果。	</p>
            <h3>Sample Input</h3>
            <pre>2
abad
aacbd</pre>
            <h3>Sample Output</h3>
            
	<pre>abba
abcba</pre>
        </div> <div id="problem9">
            <h2>1009 
		老和尚讲故事	</h2>
            <p style="text-align:center;">Time Limit : 3000/1000ms (Java/Other)&nbsp;&nbsp;&nbsp;Memory Limit : 65535/32768K (Java/Other)
                </p>
            <h3>Problem Description</h3>
            <p>
	从前有个庙，庙里有个老和尚和小和尚，老和尚给小和尚讲故事，从前有座庙，庙里有本神奇的书，听闻读此书者，轻则全身瘫痪，重责失心疯。<br>此书名为《数论》，此书中有一道特别有意思的题目，给你一个m，求${10}^{k}$不能超过${2}^{m}$的最大值。	</p>
            <h3>Input</h3>
            <p>
	每一行仅有一个$m\left( 1\leq m\leq {10}^{5}\right)$<br><br>处理到文件末尾	</p>
            <h3>Output</h3>
            <p>
		输出k	</p>
            <h3>Sample Input</h3>
            <pre>1
2</pre>
            <h3>Sample Output</h3>
            
	<pre>0
0</pre>
        </div> <div id="problem10">
            <h2>1010 
		糖糖的boring freestyle 	</h2>
            <p style="text-align:center;">Time Limit : 3000/1000ms (Java/Other)&nbsp;&nbsp;&nbsp;Memory Limit : 65535/32768K (Java/Other)
                </p>
            <h3>Problem Description</h3>
            <p>
	一天，糖糖炒鸡无聊所以他想做点无聊的事情<br><br>他在纸上画了N个点，然后在每个点画上自己连接自己的一个环(可以理解为1-1)，<br>而且还随机地在点与点之间画上一条边，他保证点与点之间没有平行边（即1-2非1=2），<br>然后他就得到了一个没有平行边的无向图G和一个邻接矩阵A，而且计算出A^2(矩阵的平方)<br><br>那么现在糖糖只给你A^2，他想知道能否实现图G所有边且每边仅通过一次通路，也就是欧拉图<br><br>Hint：<br>一个无向图是欧拉图有两个条件：<br>1、该图所有定点都是偶数 <br>2、该图是一个连通图 <br>———————————————————————————————— <br>input：<br>第一行是N，表示有N个点 <br>接下来是N*N的一个A^2 矩阵	</p>
            <h3>Input</h3>
            <p>
	第一行是N，表示有N个点 <br>接下来是N*N的一个A^2 矩阵	</p>
            <h3>Output</h3>
            <p>
		如果是欧拉图，输出Yes，否则输出No <br>	</p>
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