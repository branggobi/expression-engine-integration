## Gobi stories widget

### Installation

- Unzip file
- copy & paste the `gobistories` folder to "your-project\system\user\addons\"
- Go to admin page
  - in Add-ons page --> install Gobistories addon
  - in Template page --> choose your template --> edit

<br>

- Add stories to your template

```js
{exp:gobistories:stories stories="22jfd"}

{/exp:gobistories:stories}
```

<br>

- Add collection to your template

```js
{exp:gobistories:collection collection-id="demo"}

{/exp:gobistories:collection}
```

<br>

- Add one or more gobi stories just in one template

```js
<div>
  {exp:gobistories:stories stories="22jfd"}

  {/exp:gobistories:stories}
</div>

<div>
  {exp:gobistories:stories stories="22jfd"}

  {/exp:gobistories:stories}
</div>
```
