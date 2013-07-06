params = "{query}".split(" ")

begin
  if params.length == 2
    p (params[1].to_f / params[0].to_f)*100
  elsif params.length == 3
    p (params[1].to_f / params[0].to_f)*params[2].to_f
  else
    p 'Wrong number of arguments'
  end
rescue
  p 'There was an error!'
end