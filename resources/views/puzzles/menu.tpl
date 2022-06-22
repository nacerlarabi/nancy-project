<div class="collapse navbar-collapse" id="navbarNav">
	<ul class="navbar-nav ml-auto">test
    	{% for submenu in menu %}
    	<li class="nav-item">
    		<a href="{% if not submenu.is_blank %}/{{ lang }}/{% endif %}{{ submenu.linkName }}" class="nav-link {% if submenu.title == 'Contact' %}contact{% endif %}" {% if submenu.is_blank %}target="_blank"{% endif %}>{{ submenu.title }}</a>
        </li>
        {% endfor %}
    </ul>
</div>
<ul>
{foreach from=$menu item=submenu}
	<li class="{$submenu.active}">
		<a class="topmenulnk" href="{if !$submenu.is_blank}/{$lang}/{/if}{$submenu.linkName}" {if $submenu.is_blank}target="_blank"{/if}>
			<h4>{$submenu.title}</h4>
		</a>
		{if (isset($submenu.elements)) && ($submenu.elements|is_array)}
			<ul>
			{foreach from=$submenu.elements item=subsubmenu}
				<li class="{$subsubmenu.active}">
					<a class="topmenulnk" href="{if !$subsubmenu.is_blank}/{$lang}/{/if}{$subsubmenu.linkName}" {if $subsubmenu.is_blank}target="_blank"{/if}>
						{$subsubmenu.title}
						<img src="/common/template_leftmenubullet.gif" width="14" height="12" border="0" hspace="0" vspace="0" alt="Les cours">
					</a>
				{if (isset($subsubmenu.elements)) && ($subsubmenu.elements|is_array)}
					<ul>
						{foreach from=$subsubmenu.elements item=subsubsubmenu}
							<li class="{$subsubsubmenu.active}">
								<a class="topmenulnk" href="{if !$subsubsubmenu.is_blank}/{$lang}/{/if}{$subsubsubmenu.linkName}" {if $subsubsubmenu.is_blank}target="_blank"{/if}>
									{$subsubsubmenu.title}
									<img src="/common/template_leftmenubullet.gif" width="14" height="12" border="0" hspace="0" vspace="0" alt="Les cours">
								</a>
							</li>
						{/foreach}
					</ul>
				{/if}
				</li>
			{/foreach}
			</ul>
		{/if}
	</li>
{/foreach}
</ul>
					
