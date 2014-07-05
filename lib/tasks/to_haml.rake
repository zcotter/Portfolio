desc "Make views haml"
task to_haml: :environment do
  erbs = Dir["app/views/**/*.erb"]
  erbs.each do |e|
    `html2haml -e #{e} > #{e.gsub '.erb', '.haml'}`
    `rm #{e}`
  end
end
