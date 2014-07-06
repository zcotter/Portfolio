desc "Run rubocop"
task lint: :environment do
  puts `rubocop -D -R -c rubocop.yml`
end
