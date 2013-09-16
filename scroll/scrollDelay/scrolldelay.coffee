timeout = false
func = ->
  #函数在这里执行
  #

window.onscroll = -> 
  if (timeout) 
    clearTimeout(timeout)
  timeout = setTimeout(func,100)
  return