## Gobi stories widget

### Installation

- Unzip file
- copy & paste the `gobistories` folder to `"your-project\system\user\addons\"`
- Go to admin page
  - in Add-ons page --> install Gobistories addon
  - in Template page --> choose your template --> edit
    <br>
- Adding stories to your template

```js
{exp:gobistories:stories stories="22jfd"}
{/exp:gobistories:stories}
```

<br>

- Adding collection to your template

```js
{exp:gobistories:collection collection-id="demo"}
{/exp:gobistories:collection}
```

<br>

- Adding one or more gobi stories in just one template

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

<br>

### Options

| Option         | Default | Description                                                                                             |
| -------------- | ------- | ------------------------------------------------------------------------------------------------------- |
| stories        | null    | Required. String. The key of the story.                                                                 |
| color          | #15D6EA | Any valid css color value (#000, rgb(...), rgba(...)). The color of the border around the story bubble. |
| bubble-size    | 100px   | Valid css size value, except % (10px, 10vw...). The size of the avatar aka bubble.                      |
| show-play-icon | true    | Boolean. Add Play icon inside the bubbles                                                               |

##

### Usage stories with options

```js
{exp:gobistories:stories
 stories="your-story-id"
 color="#15D6EA"
 bubble-size="100px"
 show-play-icon="true"}

{/exp:gobistories:stories}
```

### Usage collection

```js
{exp:gobistories:collection stories="your-collection-id"}

{/exp:gobistories:collection}
```
