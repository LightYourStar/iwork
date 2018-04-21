<?php $this->layout('layouts/dashboard', ['title' => '如何使用我']) ?>
<?php $this->start('main') ?>

<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title">对这个工具的理解</h3>
</div>
<div class="panel-body">
<p>团队的工作助手，50人以内的团队最适合</p>

<p>目标是做到最简单，让团队成员知道自己的任务</p>
<p>让团队知道本阶段的任务。

<p>工具不是万能的，只能启动辅助的作用，该人去做的事情还是需要人去做。</p>

<h3>对个人而言</h3>
<p>wt可以解释成worktime，工作时间，那么在工作的时候只要看这上面有没有我的任务就好了</p>
<p>也可以解释成work task，工作任务，工作目标，</p>
<p>如果一个人在多个工程队有任务，说明这个人很重要，能力很好，他自己可以管理好自己的任务</p>

<h3>对团队，管理者而言</h3>
<p>要整体规划进度，看进度，看列表，看每一个人的列表，看每一个人的工作饱和度</p>
<p>要强调wt的重要性，不关注wt，忘记看任务列表就像忘记吃饭一样，</p>
<p>当大家形成习惯，就会离不开这个东西</p>
<p></p>
<p>除了BUG是可以直接提给相关人的，需求和优化只有经过讨论后确定要做的时候才能提，</p>
<p>不能因为有了工具就省掉沟通，面对面沟通是最有效率的事情</p>

<p>如果是更大组织，Checklist 的形态已经不能满足，需要沉淀信息，需要跨部门合作，需要宏观统计，等等等等，但用Checklist 的理念管理起来的公司，必然也能高效运作。</p>
<br>
<br>

<h3>项目开发流程管理，在团队部门使用，可以达到如下效果</h3>
<p>效率，每个人工作的完成度leader 能了解，无需反复汇报</p>
<p>透明，同事在做的事情是不是别人都知道</p>
<p>协作，同事之间为一个项目进行不同阶段的流转</p>

<h3>清晰任务管理模式</h3>
<p>将BUG、需求、改进融合在一起，实现任务的记录和追踪</p>

<h3>重新定义项目管理工具。</h3>
<p>对个人而言它是向导，每天只需关注自己的任务；</p>
<p>对管理者而言，要整体规划进度，协调其他人的内容，关注项目本身如何完成，如何灵活的组织人来参与项目</p>

<br>
<br>
<p>我不想让项目管理员对着模块划分发愁（每个人都要一套模块划分方式，没有统一标准，你这么划分我很别扭），另外显示模块也是众口难调，用什么分隔符都不一定能满足要求。模块直接在标题里用自然语言表达是最清楚不过了，统一格式可以解决大部分问题</p>

<p><strong>为什么不做模块管理？</strong>模块管理很好啊，只不过有点机械复杂。我们不想让项目管理员对着模块划分发愁（每个人都要一套模块划分方式，没有统一标准，你这么划分我很别扭），另外显示模块也是众口难调，用什么分隔符都不一定能满足要求。模块直接在标题里用自然语言表达是最清楚不过了，真的要精确？统一格式就行了。</p>

<p><strong>为什么不做环境管理？</strong>想面向一个比较广泛的项目管理领域，不仅仅是软件开发，我们希望做智能硬件的，做系统集成，做微信推广的等等做任何中小型项目的团队都来用这个产品，所以我们没有对环境字段做过多的限制。环境本身就应该是在特殊情况下才需要的字段，不是每个缺陷都需要填写环境的。所以，自由就好。</p>


<p><strong>为什么不加邮件或者弹窗之类的提醒？</strong></p>
<p>1. 邮件提醒肯定是不会加的，因为违背的简化工具的目的，我们的目标是只使用一种工具完成所有事情</p>
<p>2. wt在使用上是线性的，一个人完成了任务是一定要去改状态的，然后去查看下一个任务，极少有同时要做两件事，我们更推荐集中精力做好一件事</p>
<p>3. 每个人的任务都是基于wt列表，每天的第一件事一定是打开自己的任务（这个是需要给来的人强调的），对每个任务要有一个评估，比如有a,b,c三个任务，是先做a，还是先做b，这个取决于每个人对自己和对整个项目的认识</p>
<p>4. 任务的状态，这个也是需要给新人讲解的，因为任务状态规范了开发流程</p>


</div>
</div>

<?php $this->end()?>
