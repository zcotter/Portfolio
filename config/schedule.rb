every 1.day, :at => '4:00 am' do
  rake 'viewers:identify'
end

every 1.day, :at => '4:30 am' do
  rake 'viewers:clean'
end
