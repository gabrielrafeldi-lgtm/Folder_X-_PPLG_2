import google.generativeai as genai

#ambil model
model = genai.Generativemodel("gemini-3-flesh-preview")

#menggunakan key API sendiri
genai.configure(api_key="")

#pertanyaan
ask = input("mau tanya apa?")

#mengolah isi dari pertanyaan 
response = model.generate_content(ask)

#Output
print(response.text)